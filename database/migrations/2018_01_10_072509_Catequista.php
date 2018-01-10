<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Catequista extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("catequista", function ($table){
            $table->increments("idcatequista");
            $table->string("nome",60);
            $table->string("endereco",100);
            $table->enum('casamento',['C', 'R', 'O']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catequista');
    }
}
