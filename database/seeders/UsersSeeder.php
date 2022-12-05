<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        users::create([
            'primeiro' => 'Andreia',
            'apelido' => 'Dias',
            'email' => 'AndreiaDDias@gmail.com',
            'data_nasc' => '1990-03-20',
            'genero' => 'feminino',
            'perfil'=> 'professor',
            'password'=> bcrypt('s%m#h17G'),
        ],
        [
            'primeiro' => 'Beatriz',
            'apelido' => 'Melo',
            'email' => 'BeaMelo@gmail.com',
            'data_nasc' => '1995-10-23',
            'genero' => 'feminino',
            'perfil'=> 'professor',
            'password'=> bcrypt('bS1%T3^z'),
        ],
        [
            'primeiro' => 'André',
            'apelido' => 'Rodrigues',
            'email' => 'rodriguesDre@gmail.com',
            'data_nasc' => '1999-06-15',
            'genero' => 'masculino',
            'perfil'=> 'professor',
            'password'=> bcrypt('x%7tE8vD'),
        ]);
    }
}
