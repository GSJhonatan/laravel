<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblrespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblrespuestas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pregunta_id')->comment('Llave foranea de la tabla de tblpreguntas')->constrained('tblpreguntas');
            $table->longText('desc_respuespuesta')->comment('Descripcion de la respuesta');
            $table->boolean('correcta');
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
        Schema::dropIfExists('tblrespuestas');
    }
}
