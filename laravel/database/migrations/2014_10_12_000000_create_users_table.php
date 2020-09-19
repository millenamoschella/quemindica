<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname', 100);
            $table->string('username', 20)->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('fakepassword')->nullable();
            $table->string('cpf', 14)->unique()->nullable();
            $table->string('phone')->unique();
            $table->string('street', 150)->nullable();
            $table->string('neighborhood', 45)->nullable();
            $table->string('city', 45)->nullable();
            $table->string('state', 2)->nullable();
            $table->integer('zip_code')->nullable();
            $table->string('about', 120)->nullable();
            $table->string('photo')->nullable();
            $table->date('born_date')->nullable();
            $table->string('cover')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
