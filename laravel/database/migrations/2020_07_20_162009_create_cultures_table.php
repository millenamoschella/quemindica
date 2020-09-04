<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCulturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cultures', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 45)->nullable()->default(NULL);
            $table->string('conteudo', 150)->nullable()->default(NULL);
            $table->string('plataforma')->nullable()->default(NULL);
            $table->timestamps();

            // $table->foreignId('genre_id')->constrained();
            $table->foreignId('cultureSegment_id')->constrained('culture__segments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cultures');
    }
}
