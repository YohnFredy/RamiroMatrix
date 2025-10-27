<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\Country;
use App\Models\Department;
use App\Models\ForcedMatrix;
use App\Models\MatrixTotal;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    public $sponsor = '';

    #[Validate()]
    public $user, $username, $name, $last_name, $dni, $email, $password, $password_confirmation;
    public $sex, $birthdate, $phone, $country_id, $department_id, $city_id, $address, $terms = false;
    public $countries = [], $departments = [], $cities = [];
    public $selectedCountry = '', $selectedDepartment = '', $selectedCity = '',  $city = '';

    public $recaptcha_token = '';

    public bool $watchVideo = false;
    public bool $confirmingRegistration = false;


    protected function rules()
    {
        return [
            'sponsor' => ['required', 'string', 'max:20', 'exists:users,username'],
            'username' => ['required', 'string', 'min:3', 'max:20', 'regex:/^[a-zA-Z0-9._-]+$/', Rule::unique('users', 'username')],
            'name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'dni' => ['required', 'string', 'max:255', Rule::unique('users', 'dni')],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'sex' => ['nullable', Rule::in(['male', 'female', 'other'])],
            'birthdate' => 'required|date',
            'phone' => 'required|string|max:30',
            'country_id' => 'required|integer',
            'department_id' => 'nullable|integer',
            'city_id' => 'nullable|integer',
            'city' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            'terms' => 'accepted',
        ];
    }

    public function mount($sponsor = null, $side = null)
    {
        if (!$sponsor) {
            $this->sponsor = 'master';
        } else {
            $this->sponsor = $sponsor;
        }

        $this->countries = Country::all();
    }

    public function updatedSelectedCountry($country_id)
    {
        $this->reset(['departments', 'selectedDepartment', 'cities', 'selectedCity', 'city']);
        $this->departments = Department::where('country_id', $country_id)->get();
        $this->country_id = $country_id;
        $this->reset('department_id', 'city_id', 'city');
    }

    public function updatedSelectedDepartment($department_id)
    {
        $this->reset(['cities', 'selectedCity', 'city']);
        $this->cities = City::where('department_id', $department_id)->get();
        $this->department_id = $department_id;
        $this->reset('city_id', 'city');
    }

    public function updatedSelectedCity($city_id)
    {
        $this->reset('city');
        $this->city_id = $city_id;
    }

    public function updatedCity()
    {
        $this->reset('city_id');
    }

    private function validateRecaptcha()
    {
        if (empty($this->recaptcha_token)) {
            return false;
        }
        try {
            $response = Http::asForm()->timeout(15)->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => config('services.recaptcha.secret'),
                'response' => $this->recaptcha_token,
                'remoteip' => request()->ip()
            ]);

            $result = $response->json();

            // Verificar que la respuesta sea exitosa y el score sea aceptable
            return $result['success'] &&
                isset($result['score']) &&
                $result['score'] >= 0.5 && // Score mínimo para registro
                $result['action'] === 'user_register'; // Acción específica para registro

        } catch (\Exception $e) {
            // Log del error para debugging
            Log::error('reCAPTCHA validation error: ' . $e->getMessage());
            return false;
        }
    }

    public function save() //
    {
        $this->validate();
        $this->watchVideo = true;
    }


    public function confirmationVideo()
    {
        $this->watchVideo = false;

        $this->store(); 
    }

    public function store()
    {

        // Validar reCAPTCHA
        /* if (!$this->validateRecaptcha()) {
            session()->flash('captcha', '⚠️ No se pudo verificar tu envío mediante reCAPTCHA. Esto puede ocurrir si tu conexión es inestable o si Google no pudo confirmar la seguridad del envío. Por favor, intenta nuevamente recargando la página.');
            return;
        } */

        try {
            DB::transaction(function () { // 
                // La creación del usuario y sus datos se encapsulan en un solo método para más limpieza
                $this->user = $this->createUserWithDataAndLogConsent();

                // El resto de la lógica de negocio MLM
                $sponsor = User::where('username', $this->sponsor)->firstOrFail();

                $this->matrix($this->user->id, $sponsor->id);

                $this->confirmingRegistration = true;
            }, 5); // 5 intentos en caso de deadlock
        } catch (\Exception $e) {
            // Un log más detallado para debugging
            logger()->error('Error en el proceso de registro MLM', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'data' => $this->all() // Cuidado con datos sensibles en logs
            ]);
            $this->addError('registration', 'Ocurrió un error inesperado al procesar tu registro. Por favor, intenta de nuevo.');
        }
    }

    private function createUserWithDataAndLogConsent()
    {
        // 1. Crear el usuario principal
        $user = User::create([
            'username' => $this->username, // Es buena práctica guardar usernames en minúsculas
            'name' => $this->name,
            'last_name' => $this->last_name,
            'dni' => $this->dni,
            'email' => $this->email, // Y también los emails
            'password' => Hash::make($this->password),
        ]);

        // 2. Crear los datos adicionales del usuario
        $user->userData()->create([ // Asumiendo que tienes una relación `userData()` en el modelo User
            'sex' => $this->sex,
            'birthdate' => $this->birthdate,
            'phone' => $this->phone,
            'country_id' => $this->country_id,
            'department_id' => $this->department_id,
            'city_id' => $this->city_id,
            'city' => $this->city,
            'address' => $this->address,
        ]);

        // 3. Crear el registro de consentimiento (La parte clave)
        /* $user->consentLogs()->create([
            'contract_version_accepted'       => config('legal.contract_version'),
            'privacy_policy_version_accepted' => config('legal.privacy_version'),
            'accepted_at'                     => now(),
            'ip_address'                      => request()->ip(),
            'user_agent'                      => request()->userAgent(),
            'checkbox_text'                   => config('legal.checkbox_text'), // <--- Mucho mejor así
        ]); */

        MatrixTotal::create([
            'user_id' =>  $user->id,
        ]);

        return $user;
    }

    public function matrix($userId, $sponsorId)
    {
        $placement = MatrixTotal::where('status', 'active')
            ->where('current_affiliates', '<', 3)
            ->orderBy('user_id')
            ->lockForUpdate() // 🔒 evita que dos procesos tomen el mismo placement
            ->firstOrFail();

        // Crear el registro en la matriz forzada
        ForcedMatrix::create([
            'user_id' => $userId,
            'placement_id' => $placement->user_id,
            'sponsor_id' => $sponsorId,
        ]);

        // Calcular el nuevo número de afiliados antes de actualizar
        $newAffiliates = $placement->current_affiliates + 1;

        // Actualizar contadores y estado en una sola consulta
        $placement->update([
            'current_affiliates' => $newAffiliates,
            'total_affiliates' => DB::raw('total_affiliates + 1'),
            'status' => $newAffiliates >= 3 ? 'full' : 'active',
        ]);

        $sponsor =  MatrixTotal::where('user_id', $sponsorId)->first();
        $sponsor->increment('direct_affiliates');


        $sponsorId = $placement->user_id;

        $nivel2 = 0;
        while ($matrix = ForcedMatrix::where('user_id', $sponsorId)->first()) {

            $matrixTotal = MatrixTotal::where('user_id', $matrix->placement_id)
                ->lockForUpdate()
                ->first();

            if (!$matrixTotal) {
                break; // seguridad: si no existe, salimos del bucle
            }

            // Incrementa total_affiliates
            $matrixTotal->increment('total_affiliates');

            // Incrementa two_levels_total_affiliates solo una vez
            if ($nivel2 === 0) {
                $matrixTotal->increment('two_levels_total_affiliates');
                $nivel2++;
            }
            // Sube al siguiente nivel
            $sponsorId = $matrix->placement_id;
        }

        $sponsorId = $userId;
        while ($matrix = ForcedMatrix::where('user_id', $sponsorId)->first()) {

            $matrixTotal = MatrixTotal::where('user_id', $matrix->sponsor_id)
                ->lockForUpdate()
                ->first();

            if (!$matrixTotal) {
                break; // seguridad: si no existe, salimos del bucle
            }

            // Incrementa total_unilevel
            $matrixTotal->increment('total_unilevel');

            // Sube al siguiente nivel
            $sponsorId = $matrix->sponsor_id;
        }
    }

    public function redirectToHome()
    {
        $this->reset();
        /* Auth::login($this->user); */
        Session::regenerate();
        return redirect('/');
    }


    #[Layout('components.layouts.auth')]
    public function render()
    {
        return view('livewire.register');
    }
}
