<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 45)->nullable()->default(NULL);
            $table->string('marca', 45)->nullable()->default(NULL);
            $table->float('valor', 9, 2)->nullable()->default(NULL);
            $table->string('loja', 45)->nullable()->default(NULL);
            $table->string('cidade', 45)->nullable()->default(NULL);
            $table->string('estado', 2)->nullable()->default(NULL);
            $table->string('coordenadas')->nullable()->default(NULL);
            $table->timestamps();

            $table->foreignId('segment_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
