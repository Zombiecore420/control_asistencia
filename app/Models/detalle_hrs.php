<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class detalle_hrs extends Model
{
    use HasFactory;
    protected $table = 'detalle_hrs';
    protected $primaryKey = 'id_detalle';
    protected $fillable = ['id_horario','id_dia','id_hora'];
    public $timestamps = false;
    protected $dates = ['deleted_at'];
}
