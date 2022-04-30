<?php

namespace Database\Seeders;

use App\Models\Thought;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        //Thought::factory(3)->create();
        Thought::create([
            'title' => 'Missão',
            'content' => 'Através da vivência empresarial e trabalho em
            equipe, formar profissionais inovadores, comprometidos e 
            capazes de vencer desafios futuros',
            'id-icon' => '2',
        ]);
        Thought::create([
            'title' => 'Visão',
            'content' => 'Ser uma empresa que realiza projetos de impacto, mais conectada ao movimento 
            empresa júnior e com grande reconhecimento dentro e fora da universidade',
            'id-icon' => '3',
        ]);
        Thought::create([
            'title' => 'Valores',
            'content' => 'os valores de uma empresa guiam a conduta 
             da mesma, portanto a Ecomp jr baseia-se nos seguintes valores: Protagonismo, 
             Cooperatividade, Assiduidade, Resiliência, Constância de resultados, 
             Evolução com erros, Conexão com o movimento, Foco em qualidade, Ética e Empatia',
            'id-icon' => '1',
        ]);

    }
}

