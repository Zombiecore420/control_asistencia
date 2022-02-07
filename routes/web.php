<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\AsistenciaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('index',[PrincipalController::class,'index'])->name('index');
Route::get('admin/horario',[PrincipalController::class,'horario'])->name('horario');
Route::get('admin/empleados',[PrincipalController::class,'empleados'])->name('empleados');


Route::get('altahorario',[AsistenciaController::class,'altahorario'])->name('altahorario');
Route::post('guardarhorario',[AsistenciaController::class,'guardarhorario'])->name('guardarhorario');
Route::get('admin/reportehorario',[AsistenciaController::class,'reportehorario'])->name('reportehorario');

