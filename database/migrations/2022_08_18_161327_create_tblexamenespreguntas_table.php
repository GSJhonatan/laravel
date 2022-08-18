<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblexamenespreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblexamenespreguntas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('examen_id')->comment('Llave foranea de la tabla de tblexamenes')->constrained('tblexamenes');
            $table->foreignId('pregunta_id')->comment('Llave foranea de la tabla de tblpreguntas')->constrained('tblpreguntas');
            $table->boolean('activo')->default(1);
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
        Schema::dropIfExists('tblexamenespreguntas');
    }
}
