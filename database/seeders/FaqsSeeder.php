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
                'pergunta'=> 'Como me posso inscrever na MoveArt?',
                'resposta'=> 'Temos todo o gosto em ter-te como nosso aluno. Vai ao menu Inscreve-te e escolhe o submenu aluno, nele vais encontrar um formulário que vai fazer com que vires nosso aluno!',
            ],
            [
                'pergunta'=> 'Quero ser professor?',
                'resposta'=> 'Para se tornar professor da nossa escola, no menu Inscreve-te selecione a opção Professor. Depois basta preencheres o formulário com os teus dados e submeter o mesmo. Dentro de 3 dias será contactado independentemente se és aceite ou não.',
            ],
        ]);
    }
}
