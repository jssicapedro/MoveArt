<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq::insert([
            [
                'pergunta'=> 'Qual a idade mínima para me inscrever na MoveArt?',
                'resposta'=> 'Pode se inscrever na nossa associação a partir dos 3 anos.',
            ],
            [
                'pergunta'=> 'Posso me inscrever em mais que uma modalidade?',
                'resposta'=> 'Sim, pode ser inscrever nas modalidades que pretender.',
                
            ],
            [
                'pergunta'=> 'Os produtos da loja são envidados para fora de Portugal?',
                'resposta'=> 'Não, os produtos são apenas enviados para Portugal continental',
                
            ],
            [
                'pergunta'=> 'Onde fica a associação MoveArt?',
                'resposta'=> 'A associação MoveArt fica em Leiria. A localização exata pode ser vista na página dos contactos.',
                
            ],
            [
                'pergunta'=> 'Quantos tipos de dança existem na MoveArt?',
                'resposta'=> 'Existem 5 tipos de dança',
                
            ],
        ]);
    }
}
