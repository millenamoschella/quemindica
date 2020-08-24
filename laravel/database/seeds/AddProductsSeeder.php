<?php

use Illuminate\Database\Seeder;

use App\Product;

class AddProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'nome' => Null,
            'marca' => Null,
            'descricao' => Null,
            'valor' => Null,
            'loja' => Null,
            'cidade' => Null,
            'estado' => Null,
            'coordenadas' => Null,
            'segment_id' => 1 
        ]);

        Product::create([
            'nome' => 'Leite Zero Lactose',
            'marca' => 'Nestlè',
            'descricao' => 'Leite integral zero lactose',
            'valor' => 4.99,
            'loja' => 'Mercearia do Seu Zé',
            'cidade' => 'São Paulo',
            'estado' => 'SP',
            'coordenadas' => '123123, 123123',
            'segment_id' => 11 
        ]);

        Product::create([
            'nome' => 'Pão francês sem glúten',
            'marca' => 'Marca própria',
            'descricao' => 'Não é pão integral, macio e crocante, fornada a cada 1 hora',
            'valor' => 7.99,
            'loja' => 'Padaria da Esquina',
            'cidade' => 'São Paulo',
            'estado' => 'SP',
            'coordenadas' => '123123, 123123',
            'segment_id' => 11 
        ]);

        Product::create([
            'nome' => 'Máscara',
            'marca' => '3M',
            'descricao' => 'N95',
            'valor' => 200.00,
            'loja' => 'Farmacia XPTO',
            'cidade' => 'São Paulo',
            'estado' => 'SP',
            'coordenadas' => '123123, 123123',
            'segment_id' => 8 
        ]);

        Product::create([
            'nome' => 'Shampoo Low Poo',
            'marca' => 'Skala',
            'descricao' => 'Sem sulfatos, parabenos e silicone',
            'valor' => 51.00,
            'loja' => 'Farmacia XPTO',
            'cidade' => 'São Paulo',
            'estado' => 'SP',
            'coordenadas' => '123123, 123123',
            'segment_id' => 6 
        ]);
    }
}
