<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserModalidade;

class UsersModalidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserModalidade::insert([
            [
                'user_id' => '1',
                'modalidade_id' => '1', 
            ],
            [
                'user_id' => '2',
                'modalidade_id' => '1', 
            ],
            [
                'user_id' => '3',
                'modalidade_id' => '1', 
            ],
            [
                'user_id' => '4',
                'modalidade_id' => '2', 
            ],
            [
                'user_id' => '5',
                'modalidade_id' => '2', 
            ],
            [
                'user_id' => '6',
                'modalidade_id' => '2', 
            ],
            [
                'user_id' => '7',
                'modalidade_id' => '3', 
            ],
            [
                'user_id' => '8',
                'modalidade_id' => '3', 
            ],
            [
                'user_id' => '9',
                'modalidade_id' => '3', 
            ],
            [
                'user_id' => '10',
                'modalidade_id' => '4', 
            ],
            [
                'user_id' => '11',
                'modalidade_id' => '4', 
            ],
            [
                'user_id' => '12',
                'modalidade_id' => '4', 
            ],
            [
                'user_id' => '13',
                'modalidade_id' => '5', 
            ],
            [
                'user_id' => '14',
                'modalidade_id' => '5', 
            ],
            [
                'user_id' => '15',
                'modalidade_id' => '5', 
            ],
        ]);
    }
}
