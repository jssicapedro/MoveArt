<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PedidoProfessor;

class PedidoProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PedidoProfessor::insert([
            [
                'primeiro'=> 'Afonso',
                'apelido'=> 'José',
                'telefone'=> '917666585',
                'cv'=> '1.pdf',
                'email'=> 'afonsoZe@gmail.com',
                'data_nac'=> '1998-06-15',
                'modalidade'=> 'Ballet',
            ],
        ]);
    }
}
