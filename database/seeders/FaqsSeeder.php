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
                'pergunta'=> 'skjaxkjshaxkjh',
                'resposta'=> 'jhxgcjhgzxjhcgx',
            ],
            [
                'pergunta'=> 'zdczdczczdc',
                'resposta'=> 'czcdzcdzcdzczdczdc',
                
            ],
        ]);
    }
}
