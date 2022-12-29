<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Modalidade;

class ModalidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modalidade::insert([
            [
                'modalidade' => 'Ballet',
                'descricao' => '</p>O Ballet é uma dança é o estilo de dança mais popular no mundo que exige muita técnica e precisão nos movimentos, com a ajuda dos nossos profissionais vais aprender e ser um dos melhores.<br>A nossa escola de dança já foi premiada com ouro em 2020 e 2021.</p><br> <p>Queres ser o próximo? Vem connosco e entra nesta aventura.</p>',
                'foto_desc' => '1_app.png',
                'valor_mensal' => '75',
                'foto_mensal' => '1.jpg',
                'valor_anual' => '880',
                'foto_anual' => '1.jpg',
                'foto_horario' => '1_calendar.png',
            ],
            [
                'modalidade' => 'Hip-Hop',
                'descricao' => '<p>O hip-hop contem uma variedade de estilos, nestas aulas vais aprender principalmente breakdance e popping. Participamos todos os meses nas batalhas da região.</p><br><p>Já ganhamos vários nacionais, o europeu três anos seguidos (2019, 2020, 2021) e um mundial em 2022.</p>',
                'foto_desc' => '2_app.png',
                'valor_mensal' => '45',
                'foto_mensal' => '2.jpg',
                'valor_anual' => '500',
                'foto_anual' => '2.jpg',
                'foto_horario' => '2_calendar.png',
            ],
            [
                'modalidade' => 'Dança Espanhola',
                'descricao' => '<p>A dança espanhola é conhecida pelos movimentos elegantes. A dança espanhola mais conhecida é o Flamingo, e é esta à qual a MoveArt dá mais atenção.</p><br><p>A nossa escola de dança foi premiada em 2018 como a melhor escola de Leiria de Flamingo. Aprende esta modalidade com os nosso profissionais de topo.</p>',
                'foto_desc' => '3_app.png',
                'valor_mensal' => '35',
                'foto_mensal' => '3.jpg',
                'valor_anual' => '400',
                'foto_anual' => '3.jpg',
                'foto_horario' => '3_calendar.png',
            ],
            [
                'modalidade' => 'Danças Orientais',
                'descricao' => '<p>Não te fiques apenas pelo que conheces e aprende novas culturas. A nossa escola implementou esta dança só em 2021 mas já contamos com varias conquistas.</p><br><p>Contamos com profissionais nativos e professores experientes.</p>',
                'foto_desc' => '4_app.png',
                'valor_mensal' => '35',
                'foto_mensal' => '4.jpg',
                'valor_anual' => '400',
                'foto_anual' => '4.jpg',
                'foto_horario' => '4_calendar.png',
            ],
            [
                'modalidade' => 'Folclore',
                'descricao' => '<p>Leva a tradição sempre contigo, juntos vamos levar a tradição aos eventos nacionais e internacionais que temos ao longo do ano.</p><br><p>Vamos, juntos, mostrar a nossa tradição. Aprende folclore com os melhores profissionais.</p>',
                'foto_desc' => '5_app.png',
                'valor_mensal' => '40',
                'foto_mensal' => '5.jpg',
                'valor_anual' => '460',
                'foto_anual' => '5.jpg',
                'foto_horario' => '5_calendar.png',
            ],
        ]);
    }
}