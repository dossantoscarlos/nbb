<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableServicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('servicos', function (Blueprint $table) {
            $table->bigIncrements('id'); //1
            $table->string('nome'); // Noiva
            $table->text('descricao');//preparacao de ornamentos e buffet
            $table->timestamps();//hora da criacao do servico no bd


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicos');
    }
}
