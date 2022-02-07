<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleHrsTable extends Migration
{
    
    public function up()
    {
        Schema::create('detalle_hrs', function (Blueprint $table) {
            $table->increments('id_detalle');
            $table->integer('id_horario')->unsigned();
            $table->foreign('id_horario')->references('id_horario')->on('horarios');
            $table->integer('id_dia')->unsigned();
            $table->foreign('id_dia')->references('id_dia')->on('dias');
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('detalle_hrs');
    }
}
