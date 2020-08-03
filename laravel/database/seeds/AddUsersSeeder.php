<?php

use Illuminate\Database\Seeder;

use App\User;

class AddUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nome' => 'Jane',
            'sobrenome' => 'Doe',
            'email' => 'jane@email.com',
            'password' => '12345',
            'cpf' => '321.524.265-25',
            'telefone' => 987412365,
            'logradouro' => 'Rua da Jane Doe',
            'bairro' => 'Jane Doe',
            'cidade' => 'Jane Doe',
            'estado' => 'JD',
            'cep' => 0000000,
            'sobre' => 'Sou a Jane Doe, super legal!',
            'foto' => '',
            'nascimento' => ("1986-08-22")
        ]);
        
        User::create([
            'nome' => 'John',
            'sobrenome' => 'Doe',
            'email' => 'johndoe@email.com',
            'password' => '12345',
            'cpf' => '123.456.789-12',
            'telefone' => 987456987,
            'logradouro' => 'Rua da John Doe',
            'bairro' => 'John Doe',
            'cidade' => 'John Doe',
            'estado' => 'JD',
            'cep' => 0000000,
            'sobre' => 'Sou a John Doe, super legal!',
            'foto' => '',
            'nascimento' => ("1986-08-22")
        ]);
        
        User::create([
            'nome' => 'Dude',
            'sobrenome' => 'Doe',
            'email' => 'dudedoe@email.com',
            'password' => '12345',
            'cpf' => '123.456.789-12',
            'telefone' => 987412365,
            'logradouro' => 'Rua da John Doe',
            'bairro' => 'John Doe',
            'cidade' => 'John Doe',
            'estado' => 'JD',
            'cep' => 0000000,
            'sobre' => 'Sou a Dude Doe, super legal!',
            'foto' => '',
            'nascimento' => ("1981-06-13")
        ]);
        
        User::create([
            'nome' => 'Leonardo',
            'sobrenome' => 'Tumadjian',
            'email' => 'tumadjian@email.com',
            'password' => '12345',
            'cpf' => '312.123.321-12',
            'telefone' => 954128726,
            'logradouro' => 'Rua dos Devs, 456',
            'bairro' => 'Php',
            'cidade' => 'JavaScript',
            'estado' => 'MD',
            'cep' => 0000000,
            'sobre' => 'Sou o Léo, professor na DH',
            'foto' => '',
            'nascimento' => ("1980-05-03")
        ]);
        
        User::create([
            'nome' => 'Gabriel',
            'sobrenome' => 'Brunetti',
            'email' => 'gabs@email.com',
            'password' => '12345',
            'cpf' => '551.123.321-12',
            'telefone' => 985413957,
            'logradouro' => 'Rua dos Devs Junior, 456',
            'bairro' => 'Php',
            'cidade' => 'JavaScript',
            'estado' => 'MD',
            'cep' => 0000000,
            'sobre' => 'Sou o Gabriel, assistente do Léo',
            'foto' => '',
            'nascimento' => ("1998-07-01")
        ]);
    }
}
