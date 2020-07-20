<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSegmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('segments', function (Blueprint $table) {
            $table->id();
            $table->string('assistencia_tecnica',45);
            $table->string('educacao',45);
            $table->string('design',45);
            $table->string('eventos',45);
            $table->string('moda',45);
            $table->string('cosmeticos',45);
            $table->string('reformas',45);
            $table->string('saude',45);
            $table->string('servicos_domesticos',45);
            $table->string('concertos',45);
            $table->string('outros',45);
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
        Schema::dropIfExists('segments');
    }
}
