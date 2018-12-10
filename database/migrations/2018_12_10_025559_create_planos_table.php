<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planos', function (Blueprint $table) {
          
            $table->increments('idPlanos');
            $table->string('nomePlanos', 100);
            $table->string('descricaoPlanos', 200);
            $table->integer('validadePlanos');
            $table->integer('valorPlanos');
            $table->integer('valorAdesaoPlanos');
            $table->string('caminhoImagemPlanos', 200);
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
        Schema::dropIfExists('planos');
    }
}
