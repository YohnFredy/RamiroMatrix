<?php

namespace Database\Seeders;

use App\Models\ForcedMatrix;
use App\Models\MatrixTotal;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {

            $user = User::create([
                /* 'username' => strtolower($faker->unique()->userName), */
                'username' => $i + 2,
                'name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'dni' => $faker->unique()->numerify('#########'),
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'),
            ]);

            $user->userData()->create([
                'sex' => $faker->randomElement(['male', 'female']),
                'birthdate' => $faker->date(),
                'phone' => $faker->phoneNumber,
                'country_id' => 1,
                'department_id' => 1,
                'city_id' => 1,
                'address' => $faker->address,
            ]);

            MatrixTotal::create([
                'user_id' =>  $user->id,
            ]);

            if ($i >= 1) {
                $sponsor = random_int(1, $i);
            } else {
                $sponsor = 1;
            }

            $placement = MatrixTotal::where('status', 'active')
                ->where('current_affiliates', '<', 3)
                ->orderBy('user_id')
                ->firstOrFail();

            // Crear el registro en la matriz forzada
            ForcedMatrix::create([
                'user_id' => $user->id,
                'placement_id' => $placement->user_id,
                'sponsor_id' => $sponsor,
            ]);

            // Calcular el nuevo número de afiliados antes de actualizar
            $newAffiliates = $placement->current_affiliates + 1;

            // Actualizar contadores y estado en una sola consulta
            $placement->update([
                'current_affiliates' => $newAffiliates,
                'total_affiliates' => DB::raw('total_affiliates + 1'),
                'status' => $newAffiliates >= 3 ? 'full' : 'active',
            ]);

            $sponsor =  MatrixTotal::where('user_id', $sponsor)->first();
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


            $sponsorId = $user->id;
            while ($matrix = ForcedMatrix::where('user_id', $sponsorId)->first()) {

                $matrixTotal = MatrixTotal::where('user_id', $matrix->sponsor_id)
                    ->lockForUpdate()
                    ->first();

                if (!$matrixTotal) {
                    break; // seguridad: si no existe, salimos del bucle
                }

                // Incrementa total_affiliates
                $matrixTotal->increment('total_unilevel');

                // Sube al siguiente nivel
                $sponsorId = $matrix->sponsor_id;
            }
        }
    }
}
