<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string ('nome', 45);
            $table->string ('sobrenome', 100);
            $table->string ('cpf', 14);
            $table->string ('senha', 100);
            $table->string ('email', 100);
            $table->integer ('telefone');
            $table->string ('logradouro', 150);
            $table->string ('bairro', 45);
            $table->string ('cidade', 45);
            $table->string ('estado', 2);
            $table->integer ('cep');
            $table->string ('sobre', 120);
            $table->string ('foto');
            $table->date ('nascimento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
