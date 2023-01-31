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
                'nome' => '2024',
                'data'=> '2023-12-31 21:30:00',
                'localizacao' => 'MoveArt Studio',
                'foto' => '2023.png',
                'descricao' => 'Festa de final e início de ano com a MoveArt!',
            ],
            [
                'nome' => 'Arraial',
                'data'=> '2022-02-25 15:30:00',
                'localizacao' => 'Jardim Luís de Camões',
                'foto' => 'arraial.png',
                'descricao' => 'Espetáculo de Dança Portuguesa',
            ],
            [
                'nome' => 'Ballet sob as Estrelas',
                'data'=> '2023-05-25 20:30:00',
                'localizacao' => 'Jardim Luís de Camões',
                'foto' => 'ballet.png',
                'descricao' => 'Espetáculo de Ballet durante a noite',
            ],
            [
                'nome' => 'Dance Party',
                'data'=> '2023-11-01 20:30:00',
                'localizacao' => 'MoveArt Studio',
                'foto' => 'danceparty.png',
                'descricao' => 'Espetáculo de dança da MoveArt',
            ],
            [
                'nome' => 'Easter Dance',
                'data'=> '2023-04-07 20:30:00',
                'localizacao' => 'Teatro José Lúcio da Silva',
                'foto' => 'easter.png',
                'descricao' => 'A páscoa é melhor a dançar com a MoveArt',
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
