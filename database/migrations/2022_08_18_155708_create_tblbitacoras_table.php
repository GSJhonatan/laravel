<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblbitacorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblbitacoras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->comment('Llave foranea de la tabla de usuarios')->constrained('users');
            $table->foreignId('accion_id')->comment('Llave foranea de la tabla de tblacciones')->constrained('tblacciones');
            $table->mediumText('observaciones');
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
        Schema::dropIfExists('tblbitacoras');
    }
}
