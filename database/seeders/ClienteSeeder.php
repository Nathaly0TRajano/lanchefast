<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nome' => 'Cliente Exemplo',
            'endereco' => 'Rua exemplo 22',
            'telefone' => ' 129999999',
            'cpf' => '12345678901',
            'email'=> 'cliente@exemple.com',
            'senha'=> bcrypt('senha123')
        ]);

        Cliente::create([
            'nome' => 'Abraão',
            'endereco' => 'Rua exemplo 22',
            'telefone' => ' 129999999',
            'cpf' => '098765432101',
            'email'=> 'abraao@exemple.com',
            'senha'=> bcrypt('senha123')
        ]);

        Cliente::create([
            'nome' => 'Jáco',
            'endereco' => 'Rua exemplo 22',
            'telefone' => ' 129999999',
            'cpf' => '756491002657',
            'email'=> 'jac0@exemple.com',
            'senha'=> bcrypt('senha123')
        ]);
    }
}
