<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class dias extends Model
{
    use HasFactory;
    protected $table = 'dias';
    protected $primaryKey = 'id_dia';
    protected $fillable = ['nombre_horario', 'nombre_dia','hora_entrada','hora_salida'];
    public $timestamps = false;
    protected $dates = ['deleted_at'];
}
