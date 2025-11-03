<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('document_types')->insert([
            ['id' => 1, 'name' => 'Registro civil', 'code' => 'RC', 'is_active' => 0],
            ['id' => 2, 'name' => 'Tarjeta de identidad', 'code' => 'TI', 'is_active' => 0],
            ['id' => 3, 'name' => 'Cédula de ciudadanía', 'code' => 'CC', 'is_active' => 1],
            ['id' => 4, 'name' => 'Tarjeta de extranjería', 'code' => 'TE', 'is_active' => 1],
            ['id' => 5, 'name' => 'Cédula de extranjería', 'code' => 'CE', 'is_active' => 1],
            ['id' => 6, 'name' => 'NIT', 'code' => 'NIT', 'is_active' => 1],
            ['id' => 7, 'name' => 'Pasaporte', 'code' => 'PA', 'is_active' => 1],
            ['id' => 8, 'name' => 'Documento de identificación extranjero', 'code' => 'DIE', 'is_active' => 1],
            ['id' => 9, 'name' => 'Permiso por Protección Temporal', 'code' => 'PPT', 'is_active' => 1],
            ['id' => 10, 'name' => 'NIT de otro país', 'code' => 'NIT-EXT', 'is_active' => 1],
            ['id' => 11, 'name' => 'NUIP*', 'code' => 'NUIP', 'is_active' => 1],
        ]);

        DB::table('activation_pts')->insert([
            ['id' => 1, 'min_pts_first' => 1000, 'min_pts_monthly' => 1000],
            
        ]);
    }
}
