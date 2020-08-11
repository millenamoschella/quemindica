<?php

use Illuminate\Database\Seeder;

use App\Service;

class AddServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'nome_prestador' => Null,
            'servico' => Null,
            'descricao' => Null,
            'valor' => Null,
            'cidade' => Null,
            'estado' => Null,
            'telefone' => Null,
            'coordenadas' => Null,
            'segment_id' => 1,
        ]);

        Service::create([
            'nome_prestador' => 'João de Deus',
            'servico' => 'Encanador',
            'descricao' => 'Encontra com facilidade qualquer vazamento em sua casa',
            'valor' => 200.00,
            'cidade' => 'Santos',
            'estado' => 'SP',
            'telefone' => '95412682',
            'coordenadas' => '123123, 123123',
            'segment_id' => 7,
        ]);

        Service::create([
            'nome_prestador' => 'Maria de Jesus',
            'servico' => 'Pedreira',
            'descricao' => 'Faz tudo',
            'valor' => 500.00,
            'cidade' => 'São Paulo',
            'estado' => 'SP',
            'telefone' => '95412682',
            'coordenadas' => '123123, 123123',
            'segment_id' => 7,
        ]);

        Service::create([
            'nome_prestador' => 'Leonardo Tumadjian',
            'servico' => 'Professor de programação',
            'descricao' => 'Professor de PHP, Láravel, MySql',
            'valor' => 5000.00,
            'cidade' => 'São Paulo',
            'estado' => 'SP',
            'telefone' => '95412682',
            'coordenadas' => '123123, 123123',
            'segment_id' => 2, 
        ]);
    }
}
