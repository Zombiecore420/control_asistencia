<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosTable extends Migration
{
    
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {

            $table->increments('id_horario');
            $table->string('nombre_horario');
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('horarios');
    }
}
