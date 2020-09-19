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
            'name' => 'Marcia',
            'lastname' => 'Yokota',
            'username' => 'marcinha',
            'email' => 'marcinha@email.com',
            'password' => bcrypt('12345678'),
            'cpf' => '321.594.265-25',
            'phone' => 11998577148,
            'street' => 'Rua da Marcinha',
            'neighborhood' => 'Bairro da Marcinha',
            'city' => 'São Paulo',
            'state' => 'SP',
            'zip_code' => 0000000,
            'about' => 'Desenvolvedora web full stack. HTML5, CSS3, PHP, JavaScript, SQL, Laravel, Bootstrap',
            'photo' => '',
            'born_date' => ("1990-01-01")
        ]);
        
        User::create([
            'name' => 'Millena',
            'lastname' => 'Moschella',
            'username' => 'millena',
            'email' => 'millena@email.com',
            'password' => bcrypt('12345678'),
            'cpf' => '123.496.789-12',
            'phone' => 11957702321,
            'street' => 'Rua da Millena',
            'neighborhood' => 'Millena',
            'city' => 'São Paulo',
            'state' => 'SP',
            'zip_code' => 0000000,
            'about' => 'Desenvolvedora web full stack. HTML5, CSS3, PHP, JavaScript, SQL, Laravel, Bootstrap',
            'photo' => '',
            'born_date' => ("1986-08-22")
        ]);
        
        User::create([
            'name' => 'Sandra',
            'lastname' => 'Silmara',
            'username' => 'sandra',
            'email' => 'sandra@email.com',
            'password' => bcrypt('12345678'),
            'cpf' => '123.456.789-12',
            'phone' => 11976277211,
            'street' => 'Rua da Sandra',
            'neighborhood' => 'Sandra',
            'city' => 'São Paulo',
            'state' => 'SP',
            'zip_code' => 0000000,
            'about' => 'Desenvolvedora web full stack. HTML5, CSS3, PHP, JavaScript, SQL, Laravel, Bootstrap',
            'photo' => '',
            'born_date' => ("1981-06-13")
        ]);
        
        User::create([
            'name' => 'Shyrles',
            'lastname' => 'Monteiro',
            'username' => 'shyrles',
            'email' => 'shyrles@email.com',
            'password' => bcrypt('12345678'),
            'cpf' => '123.456.789-12',
            'phone' => 11994275686,
            'street' => 'Rua da Shyrles',
            'neighborhood' => 'Shyrles',
            'city' => 'São Paulo',
            'state' => 'SP',
            'zip_code' => 0000000,
            'about' => 'Desenvolvedora web full stack. HTML5, CSS3, PHP, JavaScript, SQL, Laravel, Bootstrap',
            'photo' => '',
            'born_date' => ("1981-06-13")
        ]);
        
        User::create([
            'name' => 'Leonardo',
            'lastname' => 'Tumadjian',
            'username' => 'leo',
            'email' => 'tumadjian@email.com',
            'password' => bcrypt('12345678'),
            'cpf' => '312.123.321-12',
            'phone' => 11999999999,
            'street' => 'Rua dos Devs, 456',
            'neighborhood' => 'Php',
            'city' => 'JavaScript',
            'state' => 'JS',
            'zip_code' => 0000000,
            'about' => 'Sou o Léo, fera em PHP e ama JavaScript (Node é melhor que PHP).',
            'photo' => '',
            'born_date' => ("1980-05-03")
        ]);
        
        User::create([
            'name' => 'Gabriel',
            'lastname' => 'Brunetti',
            'username' => 'gabriel',
            'email' => 'gabs@email.com',
            'password' => bcrypt('12345678'),
            'cpf' => '551.123.321-12',
            'phone' => 11999999998,
            'street' => 'Rua dos Devs, 456',
            'neighborhood' => 'Php',
            'city' => 'JavaScript',
            'state' => 'JS',
            'zip_code' => 0000000,
            'about' => 'Aquariano, professor na DH, ilustrador do paint.',
            'photo' => '',
            'born_date' => ("1998-07-01")
        ]);

        User::create([
            'name' => 'Hendy',
            'lastname' => 'Almeida',
            'username' => 'fronthendy',
            'email' => 'hendy@email.com',
            'password' => bcrypt('12345678'),
            'cpf' => '551.123.321-12',
            'phone' => 11999999997,
            'street' => 'Rua dos Devs, 456',
            'neighborhood' => 'Php',
            'city' => 'São Paulo',
            'state' => 'SP',
            'zip_code' => 0000000,
            'about' => 'Desenvolvedora web há 6 anos, trabalhei em empresas e projetos de diferentes necessidades técnicas. Estive em fábrica de software, startup, agência, como autônoma e agora, também ensino a programar; o que tem sido uma experiência enriquecedora pessoalmente e profissionalmente.',
            'photo' => '',
            'born_date' => ("1998-07-01")
        ]);

        User::create([
            'name' => 'Camila',
            'lastname' => 'Beisiegel',
            'username' => 'camila',
            'email' => 'camila@email.com',
            'password' => bcrypt('12345678'),
            'cpf' => '551.123.321-12',
            'phone' => 11999999996,
            'street' => 'Rua dos Devs, 456',
            'neighborhood' => 'Php',
            'city' => 'São Paulo',
            'state' => 'SP',
            'zip_code' => 0000000,
            'about' => 'Full Stack Developer | Mobile Android Developer | Assistant Instructor at Digital House',
            'photo' => '',
            'born_date' => ("1998-07-01")
        ]);

        User::create([
            'name' => 'Capiroto',
            'lastname' => 'Diablero',
            'username' => 'capiroto',
            'email' => 'capirotoa@email.com',
            'password' => bcrypt('12345678'),
            'cpf' => '551.123.321-12',
            'phone' => 11666666666,
            'street' => 'Rua do Capiroto, 666',
            'neighborhood' => 'Jd. Demolândia',
            'city' => 'São Paulo',
            'state' => 'SP',
            'zip_code' => 66666666,
            'about' => 'Desde 666 a.C. causando BUGs nos cursos de Desarollo Full Stack. Responsável pelo envio de email mkt.',
            'photo' => '',
            'born_date' => ("0666-06-06")
        ]);
    }
}
