<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblexamenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblexamenes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->comment('Llave foranea de la tabla de usuarios')->constrained('users');
            $table->integer('num_preguntas');
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
        Schema::dropIfExists('tblexamenes');
    }
}
