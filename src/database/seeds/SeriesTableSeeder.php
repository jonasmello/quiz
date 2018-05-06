<?php

use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('series')->insert([
            [
                'name' => 'House of Cards',
                'result_message' => 'Você é House of Cards: ataca o problema com método e faz de tudo para resolver a situação.'
            ],
            [
                'name' => 'Game of Thrones',
                'result_message' => 'Você é Game of Thrones: não tem muita delicadeza nas ações, mas resolve o problema de forma prática.'
            ],
            [
                'name' => 'Lost',
                'result_message' => 'Você é Lost: faz as coisas sem ter total certeza se é o caminho certo ou se faz sentido, mas no final dá tudo certo.'
            ],
            [
                'name' => 'Breaking Bad',
                'result_message' => 'Você é Breaking Bad: pra fazer acontecer você toma a liderança, mas sempre contando com seus parceiros.'
            ],
            [
                'name' => 'Silicon Valley',
                'result_message' => 'Você é Silicon Valley: vive a tecnologia o tempo todo e faz disso um mantra para cada situação no dia.'
            ]
        ]);
    }
}
