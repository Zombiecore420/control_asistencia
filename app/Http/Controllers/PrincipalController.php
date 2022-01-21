<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index(){
        return view('index');
    }

    public function horario(){
        return view('admin.horario');
    }

    public function empleados(){
        return view ('admin.empleados');
    }
}
