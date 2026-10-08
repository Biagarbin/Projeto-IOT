<?php

namespace Database\Seeders;

use App\Models\Ambiente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AmbienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ambiente::create([
            'nome' => 'Refeitório',
            'descricao' => 'cozinha escolar',
            'status' => 1,
        ]);

          Ambiente::create([
            'nome' => 'Secretaria',
            'descricao' => 'arquivos organizados',
            'status' => 0,
        ]);

        Ambiente::create([
            'nome' => 'Diretoria',
            'descricao' => 'sala da diretora',
            'status' => 0,
        ]);

    }
}
