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
                'descricao' => '</p>O Ballet é uma dança é o estilo de dança mais popular no mundo que exige muita técnica e precisão nos movimentos, com a ajuda dos nossos profissionais vais aprender e ser um dos melhores.<br>A nossa Instituição já foi premiada com ouro em 2020 e 2021.</p><br> <p>Queres ser o próximo? Vem connosco e entra nesta aventura.</p>',
                'valor_mensal' => '75',
                'valor_anual' => '880',
            ],
            [
                'modalidade' => 'Hip-Hop',
                'descricao' => '<p>O hip-hop contem uma variedade de estilos, nestas aulas vais aprender principalmente breakdance e popping. Participamos todos os meses nas batalhas da região.</p><br><p>Já ganhamos vários nacionais, o europeu três anos seguidos (2019, 2020, 2021) e um mundial em 2022.</p>',
                'valor_mensal' => '45',
                'valor_anual' => '500',
            ],
            [
                'modalidade' => 'Dança Espanhola',
                'descricao' => '<p>A dança espanhola é conhecida pelos movimentos elegantes. A dança espanhola mais conhecida é o Flamingo, e é esta à qual a MoveArt dá mais atenção.</p><br><p>A nossa Instituição foi premiada em 2018 como a melhor escola de Leiria de Flamingo. Aprende esta modalidade com os nosso profissionais de topo.</p>',
                'valor_mensal' => '35',
                'valor_anual' => '400',
            ],
            [
                'modalidade' => 'Danças Orientais',
                'descricao' => '<p>Não te fiques apenas pelo que conheces e aprende novas culturas. A nossa escola implementou esta dança só em 2021 mas já contamos com varias conquistas.</p><br><p>Contamos com profissionais nativos e professores experientes.</p>',
                'valor_mensal' => '35',
                'valor_anual' => '400',
            ],
            [
                'modalidade' => 'Folclore',
                'descricao' => '<p>Leva a tradição sempre contigo, juntos vamos levar a tradição aos eventos nacionais e internacionais que temos ao longo do ano.</p><br><p>Vamos, juntos, mostrar a nossa tradição. Aprende folclore com os melhores profissionais.</p>',
                'valor_mensal' => '40',
                'valor_anual' => '460',
            ],
        ]);
    }
}