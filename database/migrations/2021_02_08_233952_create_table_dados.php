<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biblioteca', function (Blueprint $table) {
            $table->increments('id');
            $table->string('autor');
            $table->string('livro');
            $table->string('editora');
            $table->string('genero');
            $table->string('nascimento');
            $table->string('sexo');
            $table->string('nacionalidade');
            $table->string('lancamento');
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
        Schema::dropIfExists('biblioteca');
    }
}
