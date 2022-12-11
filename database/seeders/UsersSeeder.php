<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([[
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
        ],
        [
            'primeiro' => 'Luísa',
            'apelido' => 'Suares',
            'email' => 'luisaSuares@gmail.com',
            'data_nasc' => '1998-05-12',
            'genero' => 'feminino',
            'perfil'=> 'professor',
            'password'=> bcrypt('3!2IaWA5'),
        ],
        [
            'primeiro' => 'Nuno',
            'apelido' => 'Alves',
            'email' => 'alvesnuno@gmail.com',
            'data_nasc' => '1992-07-12',
            'genero' => 'masculino',
            'perfil'=> 'professor',
            'password'=> bcrypt('60&R4dpC'),
        ],
        [
            'primeiro' => 'Mauro',
            'apelido' => 'Pinto',
            'email' => 'maauroP@gmail.com',
            'data_nasc' => '1999-06-24',
            'genero' => 'masculino',
            'perfil'=> 'professor',
            'password'=> bcrypt('8486^KwC'),
        ],
        [
            'primeiro' => 'Catarina',
            'apelido' => 'Alves',
            'email' => 'AlvesCat@gmail.com',
            'data_nasc' => '1987-06-25',
            'genero' => 'feminino',
            'perfil'=> 'professor',
            'password'=> bcrypt('y!oV244!'),
        ],
        [
            'primeiro' => 'Íris',
            'apelido' => 'Faria',
            'email' => 'iris_F@gmail.com',
            'data_nasc' => '2001-06-17',
            'genero' => 'feminino',
            'perfil'=> 'professor',
            'password'=> bcrypt('3$mI52gB'),
        ],
        [
            'primeiro' => 'Afonso',
            'apelido' => 'Pinheiro',
            'email' => 'pin_a@gmail.com',
            'data_nasc' => '1997-09-25',
            'genero' => 'masculino',
            'perfil'=> 'professor',
            'password'=> bcrypt('I097!4p3'),
        ],
        [
            'primeiro' => 'Denise',
            'apelido' => 'Pereira',
            'email' => 'pereiraDen@gmail.com',
            'data_nasc' => '1978-12-11',
            'genero' => 'masculino',
            'perfil'=> 'professor',
            'password'=> bcrypt('671Pr0#H'),
        ],
        [
            'primeiro' => 'Sandra',
            'apelido' => 'João',
            'email' => 'sandrajoao1@gmail.com',
            'data_nasc' => '1977-08-25',
            'genero' => 'feminino',
            'perfil'=> 'professor',
            'password'=> bcrypt('v#H87X0m'),
        ],
        [
            'primeiro' => 'Carina',
            'apelido' => 'João',
            'email' => 'carinajoao@gmail.com',
            'data_nasc' => '1989-05-29',
            'genero' => 'feminino',
            'perfil'=> 'professor',
            'password'=> bcrypt('4G5vl3T*'),
        ],
        [
            'primeiro' => 'Adriana',
            'apelido' => 'Fernandes',
            'email' => 'fernandes@gmail.com',
            'data_nasc' => '1972-08-06',
            'genero' => 'feminino',
            'perfil'=> 'professor',
            'password'=> bcrypt('N!85rr3Y'),
        ],
        [
            'primeiro' => 'Hélder',
            'apelido' => 'Henriques',
            'email' => 'Hhenriques@gmail.com',
            'data_nasc' => '1973-04-20',
            'genero' => 'masculino',
            'perfil'=> 'professor',
            'password'=> bcrypt('03h9THp$'),
        ],
        [
            'primeiro' => 'João',
            'apelido' => 'Henriques',
            'email' => 'henriquesJoao@gmail.com',
            'data_nasc' => '1971-11-19',
            'genero' => 'masculino',
            'perfil'=> 'professor',
            'password'=> bcrypt('03h9THp$'),
        ],
        [
            'primeiro' => 'Jessica',
            'apelido' => 'Pedro',
            'email' => 'jessicapedro@gmail.com',
            'data_nasc' => '2002-06-15',
            'genero' => 'feminino',
            'telefone' => '956854758',
            'perfil'=> 'admin',
            'password'=> bcrypt('jpeuneh9#'),
        ],
    ]);
    }
}
