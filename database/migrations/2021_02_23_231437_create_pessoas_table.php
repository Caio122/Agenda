<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('turma_id')->unsigned();
            $table->foreign('turma_id')->references('id')->on('pessoas')->onDelete("cascade");
            $table->string('nome');
            $table->string('descricao');
            $table->timestamps();
        }); 
    }

    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
