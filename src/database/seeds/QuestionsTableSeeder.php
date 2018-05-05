<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [
                'description' => 'De manhã, você:'
            ],
            [
                'description' => 'Indo para o trabalho você encontra uma senhora idosa caída na rua.'
            ],
            [
                'description' => 'Chega no prédio e o elevador está cheio.'
            ],
            [
                'description' => 'Você chega no trabalho e as convenções sociais te obrigam a puxar assunto.'
            ],
            [
                'description' => 'A pauta pegou o dia todo, mas você está indo para casa.'
            ]
        ]);
    }
}
