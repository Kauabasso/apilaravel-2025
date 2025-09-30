<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tarefa;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Tarefa::insert([
            [
                "texto" => "Acordar e fazer alongamentos matinais"
            ],
            [
                "texto" => "Preparar e tomar o café da manhã"
            ],
            [
                "texto" => "Verificar e responder e-mails urgentes"
            ],
            [
                "texto" => "Trabalhar em projetos prioritários por 2 horas"
            ],
            [
                "texto" => "Almoçar e fazer uma pausa de 30 minutos"
            ],
            [
                "texto" => "Lavar a louça ou organizar a cozinha"
            ],
            [
                "texto" => "Fazer uma caminhada curta ou praticar exercícios"
            ],
            [
                "texto" => "Estudar um novo idioma por 45 minutos"
            ],
            [
                "texto" => "Preparar e jantar"
            ],
            [
                "texto" => "Ler um livro ou assistir a um documentário"
            ],
            [
                "texto" => "Organizar a agenda para o dia seguinte"
            ],
            [
                "texto" => "Escovar os dentes e se preparar para dormir"
            ]
        
        ]);
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
    
}
