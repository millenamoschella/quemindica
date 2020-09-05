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
            'name' => 'Jane',
            'lastname' => 'Doe',
            'username' => 'janedoe',
            'email' => 'jane@email.com',
            'password' => bcrypt('12345678'),
            'cpf' => '321.594.265-25',
            'phone' => 11111111111,
            'street' => 'Rua da Jane Doe',
            'neighborhood' => 'Jane Doe',
            'city' => 'Jane Doe',
            'state' => 'JD',
            'zip_code' => 0000000,
            'about' => 'Sou a Jane Doe, super legal!',
            'photo' => '',
            'born_date' => ("1986-08-22")
        ]);
        
        User::create([
            'name' => 'John',
            'lastname' => 'Doe',
            'username' => 'johndoe',
            'email' => 'johndoe@email.com',
            'password' => bcrypt('12345678'),
            'cpf' => '123.496.789-12',
            'phone' => 22222222222,
            'street' => 'Rua da John Doe',
            'neighborhood' => 'John Doe',
            'city' => 'John Doe',
            'state' => 'JD',
            'zip_code' => 0000000,
            'about' => 'Sou a John Doe, super legal!',
            'photo' => '',
            'born_date' => ("1986-08-22")
        ]);
        
        User::create([
            'name' => 'Dude',
            'lastname' => 'Doe',
            'username' => 'dudedoe',
            'email' => 'dudedoe@email.com',
            'password' => bcrypt('12345678'),
            'cpf' => '123.456.789-12',
            'phone' => 33333333333,
            'street' => 'Rua da John Doe',
            'neighborhood' => 'John Doe',
            'city' => 'John Doe',
            'state' => 'JD',
            'zip_code' => 0000000,
            'about' => 'Sou a Dude Doe, super legal!',
            'photo' => '',
            'born_date' => ("1981-06-13")
        ]);
        
        User::create([
            'name' => 'Leonardo',
            'lastname' => 'Tumadjian',
            'username' => 'leotuma',
            'email' => 'tumadjian@email.com',
            'password' => bcrypt('12345678'),
            'cpf' => '312.123.321-12',
            'phone' => 44444444444,
            'street' => 'Rua dos Devs, 456',
            'neighborhood' => 'Php',
            'city' => 'JavaScript',
            'state' => 'MD',
            'zip_code' => 0000000,
            'about' => 'Sou o Léo, professor na DH',
            'photo' => '',
            'born_date' => ("1980-05-03")
        ]);
        
        User::create([
            'name' => 'Gabriel',
            'lastname' => 'Brunetti',
            'username' => 'gabrunetti',
            'email' => 'gabs@email.com',
            'password' => bcrypt('12345678'),
            'cpf' => '551.123.321-12',
            'phone' => 55555555555,
            'street' => 'Rua dos Devs, 456',
            'neighborhood' => 'Php',
            'city' => 'JavaScript',
            'state' => 'MD',
            'zip_code' => 0000000,
            'about' => 'Sou o Gabriel, assistente do Léo',
            'photo' => '',
            'born_date' => ("1998-07-01")
        ]);
    }
}
