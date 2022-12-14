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
        User::insert([
        /* ADMIN */
        [
            'foto' => null,
            'primeiro' => 'Jéssica',
            'apelido' => 'Pedro',
            'email' => 'jessica00pedro@gmail.com',
            'data_nasc' => '2003-05-15',
            'genero' => 'feminino',
            'perfil'=> 'admin',
            'password'=> bcrypt('moveart22'),
        ],
        [
            'foto' => null,
            'primeiro' => 'Adriana',
            'apelido' => 'Valente',
            'email' => 'adriana00valent@gmail.com',
            'data_nasc' => '2003-03-25',
            'genero' => 'feminino',
            'perfil'=> 'admin',
            'password'=> bcrypt('moveart22'),
        ],
        [
            'foto' => null,
            'primeiro' => 'Diogo',
            'apelido' => 'Santos',
            'email' => 'diogo00santos@gmail.com',
            'data_nasc' => '2003-09-27',
            'genero' => 'masculino',
            'perfil'=> 'admin',
            'password'=> bcrypt('moveart22'),
        ],
        [
            'foto' => null,
            'primeiro' => 'Beatriz',
            'apelido' => 'Gameiro',
            'email' => 'beatriz00gameiro@gmail.com',
            'data_nasc' => '2003-09-07',
            'genero' => 'feminino',
            'perfil'=> 'admin',
            'password'=> bcrypt('moveart22'),
        ],
        [
            'foto' => null,
            'primeiro' => 'Tiago',
            'apelido' => 'Migueis',
            'email' => 'tiago00migueis@gmail.com',
            'data_nasc' => '2003-10-07',
            'genero' => 'masculino',
            'perfil'=> 'admin',
            'password'=> bcrypt('moveart22'),
        ],
        
        /* PROFESSOR */
        [
            'foto' => '6.png',
            'primeiro' => 'Andreia',
            'apelido' => 'Dias',
            'email' => 'AndreiaDDias@gmail.com',
            'data_nasc' => '1990-03-20',
            'genero' => 'feminino',
            'perfil'=> 'professor',
            'password'=> bcrypt('s%m#h17G'),
        ],
        [
            'foto' => '7.png',
            'primeiro' => 'Beatriz',
            'apelido' => 'Melo',
            'email' => 'BeaMelo@gmail.com',
            'data_nasc' => '1995-10-23',
            'genero' => 'feminino',
            'perfil'=> 'professor',
            'password'=> bcrypt('bS1%T3^z'),
        ],
        [
            'foto' => '8.png',
            'primeiro' => 'André',
            'apelido' => 'Rodrigues',
            'email' => 'rodriguesDre@gmail.com',
            'data_nasc' => '1999-06-15',
            'genero' => 'masculino',
            'perfil'=> 'professor',
            'password'=> bcrypt('x%7tE8vD'),
        ],
        [
            'foto' => '9.png',
            'primeiro' => 'Luísa',
            'apelido' => 'Suares',
            'email' => 'luisaSuares@gmail.com',
            'data_nasc' => '1998-05-12',
            'genero' => 'feminino',
            'perfil'=> 'professor',
            'password'=> bcrypt('3!2IaWA5'),
        ],
        [
            'foto' => '10.png',
            'primeiro' => 'Nuno',
            'apelido' => 'Alves',
            'email' => 'alvesnuno@gmail.com',
            'data_nasc' => '1992-07-12',
            'genero' => 'masculino',
            'perfil'=> 'professor',
            'password'=> bcrypt('60&R4dpC'),
        ],
        [
            'foto' => '11.png',
            'primeiro' => 'Mauro',
            'apelido' => 'Pinto',
            'email' => 'maauroP@gmail.com',
            'data_nasc' => '1999-06-24',
            'genero' => 'masculino',
            'perfil'=> 'professor',
            'password'=> bcrypt('8486^KwC'),
        ],
        [
            'foto' => '12.png',
            'primeiro' => 'Catarina',
            'apelido' => 'Alves',
            'email' => 'AlvesCat@gmail.com',
            'data_nasc' => '1987-06-25',
            'genero' => 'feminino',
            'perfil'=> 'professor',
            'password'=> bcrypt('y!oV244!'),
        ],
        [
            'foto' => '13.png',
            'primeiro' => 'Íris',
            'apelido' => 'Faria',
            'email' => 'iris_F@gmail.com',
            'data_nasc' => '2001-06-17',
            'genero' => 'feminino',
            'perfil'=> 'professor',
            'password'=> bcrypt('3$mI52gB'),
        ],
        [
            'foto' => '14.png',
            'primeiro' => 'Afonso',
            'apelido' => 'Pinheiro',
            'email' => 'pin_a@gmail.com',
            'data_nasc' => '1997-09-25',
            'genero' => 'masculino',
            'perfil'=> 'professor',
            'password'=> bcrypt('I097!4p3'),
        ],
        [
            'foto' => '15.png',
            'primeiro' => 'Denise',
            'apelido' => 'Pereira',
            'email' => 'pereiraDen@gmail.com',
            'data_nasc' => '1978-12-11',
            'genero' => 'feminino',
            'perfil'=> 'professor',
            'password'=> bcrypt('671Pr0#H'),
        ],
        [
            'foto' => '16.png',
            'primeiro' => 'Sandra',
            'apelido' => 'João',
            'email' => 'sandrajoao1@gmail.com',
            'data_nasc' => '1977-08-25',
            'genero' => 'feminino',
            'perfil'=> 'professor',
            'password'=> bcrypt('v#H87X0m'),
        ],
        [
            'foto' => '17.png',
            'primeiro' => 'Carina',
            'apelido' => 'João',
            'email' => 'carinajoao@gmail.com',
            'data_nasc' => '1989-05-29',
            'genero' => 'feminino',
            'perfil'=> 'professor',
            'password'=> bcrypt('4G5vl3T*'),
        ],
        [
            'foto' => '18.png',
            'primeiro' => 'Adriana',
            'apelido' => 'Fernandes',
            'email' => 'fernandes@gmail.com',
            'data_nasc' => '1972-08-06',
            'genero' => 'feminino',
            'perfil'=> 'professor',
            'password'=> bcrypt('N!85rr3Y'),
        ],
        [
            'foto' => '19.png',
            'primeiro' => 'Hélder',
            'apelido' => 'Henriques',
            'email' => 'Hhenriques@gmail.com',
            'data_nasc' => '1973-04-20',
            'genero' => 'masculino',
            'perfil'=> 'professor',
            'password'=> bcrypt('03h9THp$'),
        ],
        [
            'foto' => '20.png',
            'primeiro' => 'João',
            'apelido' => 'Henriques',
            'email' => 'henriquesJoao@gmail.com',
            'data_nasc' => '1971-11-19',
            'genero' => 'masculino',
            'perfil'=> 'professor',
            'password'=> bcrypt('03h9THp$'),
        ],
        
        /* ALUNOS */
        [
            'foto' => null,
            'primeiro' => 'Nelson',
            'apelido' => 'Pedro',
            'email' => 'PedroNelson@gmail.com',
            'data_nasc' => '1975-01-06',
            'genero' => 'Masculino',
            'perfil'=> 'aluno',
            'password'=> bcrypt('iVor587$'),

        ],
    ]);
    }
}
