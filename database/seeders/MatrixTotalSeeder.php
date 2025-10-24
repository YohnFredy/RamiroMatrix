<?php

namespace Database\Seeders;

use App\Models\MatrixTotal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatrixTotalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MatrixTotal::create([
            'user_id' => 1,
            'status' => 'active',
            'current_affiliates' => 0,
            'two_levels_total_affiliates' => 0,
            'direct_affiliates' => 0,
            'total_affiliates' => 0,
            'total_unilevel' => 0,
        ]);
    }
}
