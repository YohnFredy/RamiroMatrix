<?php

namespace App\Livewire\Admin\Businesses;

use App\Models\Business;
use App\Models\City;
use App\Models\Country;
use App\Models\Department;
use Illuminate\Support\Facades\Gate;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class BusinessForm extends Component
{
    public ?Business $business = null;

    // Propiedades del modelo bindeadas al formulario
    public string $name = '';
    public string $nit = '';
    public ?string $phone = '';
    public float $seller_commission_rate = 0.00;
    public float $sponsor_commission_rate = 0.00;
    public float $min_company_commission = 0.00;
    public float $max_company_commission = 0.00;

    public $country_id, $department_id, $city_id, $address;
    public $countries = [], $departments = [], $cities = [];
    public $selectedCountry = '', $selectedDepartment = '', $selectedCity = '',  $city = '';

    /**
     * El método mount se ejecuta al iniciar el componente.
     * Si recibe un ID de negocio, carga sus datos para edición.
     * Si no, prepara el formulario para la creación.
     */
    public function mount(?Business $business): void
    {
        if ($business->exists) {
            $this->business = $business;
            $this->loadBusinessData(); 
            $this->departments = Department::where('country_id', $this->selectedCountry)->get();
            $this->cities = City::where('department_id', $this->selectedDepartment)->get();
        } else {
            // Inicializa un nuevo modelo para evitar errores al llamar a ->exists
            $this->business = new Business();
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

    public function loadBusinessData()
    {
        $business = $this->business;

        $this->name = $business->name;
        $this->nit = $business->nit;
        $this->phone = $business->phone;

        $this->address = $business->address ?? '';
        $this->country_id = $this->selectedCountry = $business->country_id ?? '';
        $this->department_id = $this->selectedDepartment = $business->department_id ?? '';
        $this->city_id = $this->selectedCity = $business->city_id ?? '';
        $this->city = $business->city ?? '';

        $this->seller_commission_rate = $business->seller_commission_rate;
        $this->sponsor_commission_rate = $business->sponsor_commission_rate;
        $this->min_company_commission = $business->min_company_commission;
        $this->max_company_commission = $business->max_company_commission;
    }


    /**
     * Reglas de validación para el formulario.
     */
    protected function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            // Valida que el NIT sea único, ignorando el registro actual al editar
            'nit' => 'required|string|unique:businesses,nit,' . ($this->business->id ?? 'NULL'),
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'country_id' => 'required|integer',
            'department_id' => 'nullable|integer',
            'city_id' => 'nullable|integer',
            'city' => 'nullable|string|max:255',
            'seller_commission_rate' => 'required|numeric|min:0|max:999.99',
            'sponsor_commission_rate' => 'required|numeric|min:0|max:999.99',
            'min_company_commission' => 'required|numeric|min:0|max:999.99',
            'max_company_commission' => 'required|numeric|min:0|max:999.99',
        ];
    }

    /**
     * Mensajes de error personalizados para la validación.
     */
    protected function messages(): array
    {
        return [
            'name.required' => 'El nombre del negocio es obligatorio.',
            'nit.required' => 'El NIT es obligatorio.',
            'nit.unique' => 'Este NIT ya está registrado.',
            'country_id.required' => 'Debes seleccionar un país.',
            'seller_commission_rate.required' => 'La comisión del vendedor es obligatoria.',
            'seller_commission_rate.numeric' => 'La comisión del vendedor debe ser un número.',
            // ... puedes añadir más mensajes personalizados
        ];
    }

    /**
     * Guarda el registro (crea o actualiza).
     */
    public function save()
    {
        // Primero, valida los datos del formulario
        $validatedData = $this->validate();

        // Determina si se está creando o editando
        if ($this->business->exists) {
            // Autorización para editar
            Gate::authorize('admin.businesses.edit');

            // Actualiza el registro existente
            $this->business->update($validatedData);
            session()->flash('success', 'El negocio aliado fue actualizado correctamente.');
        } else {
            // Autorización para crear
            Gate::authorize('admin.businesses.create');

            // Crea un nuevo registro
            Business::create($validatedData);
            session()->flash('success', 'El negocio aliado fue creado correctamente.');
        }

        // Redirige al listado de negocios
        return redirect()->route('admin.businesses.index');
    }

    #[Layout('components.layouts.admin')]
    public function render()
    {
        // Aquí deberías cargar los países, departamentos y ciudades para los selects
        // Ejemplo (necesitarás los modelos Country, Department, City):
        // $countries = \App\Models\Country::all();

        return view('livewire.admin.businesses.business-form', [
            // 'countries' => $countries,
        ]);
    }
}
