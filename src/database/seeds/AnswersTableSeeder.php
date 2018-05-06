<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            [
                'description' => 'Acorda cedo e come frutas cortadas metodicamente.',
                'series_id'   => '1',
                'question_id' => '1'
            ],
            [
                'description' => 'Sai da cama com o despertador e se prepara para a batalha da semana.',
                'series_id'   => '2',
                'question_id' => '1'
            ],
            [
                'description' => 'Só consegue lembrar do seu nome depois do café.',
                'series_id'   => '3',
                'question_id' => '1'
            ],
            [
                'description' => 'Levanta e faz café pra todos da casa.',
                'series_id'   => '4',
                'question_id' => '1'
            ],
            [
                'description' => 'Passa o café e conserta um erro no HTML.',
                'series_id'   => '5',
                'question_id' => '1'
            ],

            [
                'description' => 'Ela vai atrapalhar seu horário. Oculte o corpo.',
                'series_id'   => '1',
                'question_id' => '2'
            ],
            [
                'description' => 'Levanta a senhora e jura protegê-la com sua vida.',
                'series_id'   => '2',
                'question_id' => '2'
            ],
            [
                'description' => 'Ajuda-a, mas questiona sua real identidade.',
                'series_id'   => '3',
                'question_id' => '2'
            ],
            [
                'description' => 'Oferece para caminharem juntos até um destino em comum.',
                'series_id'   => '4',
                'question_id' => '2'
            ],
            [
                'description' => 'Testa se ela roda bem no Firefox. Não roda.',
                'series_id'   => '5',
                'question_id' => '2'
            ],

            [
                'description' => 'Convence parte das pessoas a esperarem o próximo.',
                'series_id'   => '1',
                'question_id' => '3'
            ],
            [
                'description' => 'Ignora as pessoas no elevador e entra de qualquer forma.',
                'series_id'   => '2',
                'question_id' => '3'
            ],
            [
                'description' => 'Você questiona a realidade, as coisas e tudo mais. Sobe de escada.',
                'series_id'   => '3',
                'question_id' => '3'
            ],
            [
                'description' => 'Com uma leve intimidação passivo-agressiva, encontra um lugar no elevador.',
                'series_id'   => '4',
                'question_id' => '3'
            ],
            [
                'description' => 'Cria um app que mostra a lotação do elevador. Vende o app e fica milionário.',
                'series_id'   => '5',
                'question_id' => '3'
            ],

            [
                'description' => 'Fala sobre a política, eleições, como tudo é um absurdo.',
                'series_id'   => '1',
                'question_id' => '4'
            ],
            [
                'description' => 'Larga uma frase polêmica e vê uma pequena guerra se formar.',
                'series_id'   => '2',
                'question_id' => '4'
            ],
            [
                'description' => 'Puxa um assunto e te lembram que já foi discutido semana passada.',
                'series_id'   => '3',
                'question_id' => '4'
            ],
            [
                'description' => 'Sugere que os colegas trabalhem na ideia de um novo projeto.',
                'series_id'   => '4',
                'question_id' => '4'
            ],
            [
                'description' => 'Desabafa sobre como odeia PHP. Todo mundo na sala adora PHP.',
                'series_id'   => '5',
                'question_id' => '4'
            ],

            [
                'description' => 'Vou chamar aqui o meu Uber.',
                'series_id'   => '1',
                'question_id' => '5'
            ],
            [
                'description' => 'Pegarei o bus junto com o resto do povo.',
                'series_id'   => '2',
                'question_id' => '5'
            ],
            [
                'description' => 'No ponto de ônibus mais uma vez, espero não errar a linha de novo.',
                'series_id'   => '3',
                'question_id' => '5'
            ],
            [
                'description' => 'Vou de carro, mas ofereço uma carona para os colegas.',
                'series_id'   => '4',
                'question_id' => '5'
            ],
            [
                'description' => 'Acho que descobri uma forma de fazer aquela senhora rodar no Firefox.',
                'series_id'   => '5',
                'question_id' => '5'
            ]
        ]);
    }
}
