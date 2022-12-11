<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Patrocinio;

class PatrociniosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Patrocinio::insert([
            [
                'nome'=> 'Move-te',
                'email'=> 'patrocinio@movete.com',
                'valor'=> '100',
                'telefone'=> '',
                'mensagem'=> 'Como patrocínio damos 100€ esperamos contribuir para que continuem com as ótimas aulas! Bom trabalho',
            ],
            [
                'nome'=> 'Leiria a dançar',
                'email'=> 'dancaLeiria@gmail.com',
                'valor'=> '50',
                'telefone'=> '',
                'mensagem'=> 'De forma a agradecer pelo trabalho que prestam e pelo ajuda na organização do nosso evento',
            ],
        ]);
    }
}
