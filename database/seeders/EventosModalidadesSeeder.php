<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EventoModalidade;

class EventosModalidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EventoModalidade::insert([
            [
                'evento_id' => '1',
                'modalidade_id' => '1',
            ],
            [
                'evento_id' => '2',
                'modalidade_id' => '2',
            ],
        ]);
    }
}