<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Inscricao;

class InscricoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inscricao::insert([
            [
                'data_inicio' => '2022-12-01',
                'data_fim' => '2023-01-01',
                'type_insc' => 'mensal',
                'modalidade_id' => '1',
                'user_id' => '21',
            ],
        ]);
    }
}
