<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiasTable extends Migration
{
   
    public function up()
    {
        Schema::create('dias', function (Blueprint $table) {
            $table->increments('id_dia');
            $table->string('nombre_dia');
            $table->string('nombre_horario');
            $table->time('hora_entrada');
            $table->time('hora_salida');
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('dias');
    }
}
