<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstructuraDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estructura_detalle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idestructura')->nullable();
            $table->integer('idcategoria')->nullable();

            $table->foreign('idestructura')->references('id')->on('estructura');
            $table->foreign('idcategoria')->references('id')->on('catalogo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estructura_detalle');
    }
}
