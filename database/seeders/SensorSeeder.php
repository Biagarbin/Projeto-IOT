<?php

namespace Database\Seeders;

use App\Models\Sensor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sensor::create([
            'ambiente_id' => 'Refeitório',
            'codigo' => '01',
            'tipo' => '',
            'descricao' => '',
            'status' => 1,
        ]);

        Sensor::create([
            'ambiente_id' => 'Refeitório',
            'codigo' => '02',
            'tipo' => '',
            'descricao' => '',
            'status' => 1,
        ]);

        Sensor::create([
            'ambiente_id' => 'Refeitório',
            'codigo' => '03',
            'tipo' => '',
            'descricao' => '',
            'status' => 1,
        ]);

        
    }
}
