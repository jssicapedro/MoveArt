<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Evento;

class EventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evento::insert([
            [
                'nome' => 'A bela Adormecida',
                'data'=> '2022-12-12 20:30:00',
                'localizacao' => 'Leiria',
                'foto' => 'evento1.jpg',
                'descricao' => 'Espetáculo da história da Bela adormecida com os melhores dançarinos do país.',
            ],
            [
                'nome' => 'House vs Hip-Hop',
                'data'=> '2022-12-03 14:45:00',
                'localizacao' => 'Leiria',
                'foto' => 'evento2.jpg',
                'descricao' => 'Batalha de House vs Hip-Hop. Escolhe a melhor!',
            ],
            [
                'nome' => 'Dança Espanhola',
                'data'=> '2022-11-29 16:00:00',
                'localizacao' => 'Leiria',
                'foto' => 'evento3.jpg',
                'descricao' => 'Espetáculo de dança espanhola. Não perca!',
            ],
        ]);
    }
}
