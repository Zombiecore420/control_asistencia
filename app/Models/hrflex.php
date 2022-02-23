<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class hrflex extends Model
{
  
    use SoftDeletes;

    protected $table = 'hrflexes';
    protected $primaryKey = 'id_horario';
    protected $fillable = ['nombre_dia','nombre_horario', 'hora_entrada','hora_salida'];
    protected $dates = ['deleted_at'];
}
