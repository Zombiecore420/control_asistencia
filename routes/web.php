<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\HorariofController;
use App\Http\Controllers\PrincipalController;




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

//rutas principales de las vistas 
Route::get('index',[PrincipalController::class,'index'])->name('index');
Route::get('admin/empleados',[PrincipalController::class,'empleados'])->name('empleados');
Route::get('admin/horarios',[PrincipalController::class,'horarios'])->name('horarios');

Route::get('admin/solicitud',[PrincipalController::class,'solicitud'])->name('solicitud');
Route::get('admin/informes',[PrincipalController::class,'informes'])->name('informes');
Route::get('admin/calendario',[PrincipalController::class,'calendario'])->name('calendario');

//Alta
Route::get('altahorario',[HorarioController::class,'altahorario'])->name('altahorario');
Route::post('guardarhorario',[HorarioController::class,'guardarhorario'])->name('guardarhorario');
Route::get('admin/horarios',[HorarioController::class,'reportehorario'])->name('horarios');


//Operaciones
Route::get('desactivarhorario/{id_horario}', [HorarioController::class, 'desactivarhorario'])->name('desactivarhorario');        //Desactiva horarios
Route::get('activarhorario/{id_horario}', [HorarioController::class, 'activarhorario'])->name('activarhorario');        //Activa horarios
Route::get('eliminarhorario/{id_horario}', [HorarioController::class, 'eliminarhorario'])->name('eliminarhorario'); 

//Modificaciones
Route::get('modificarh/{id_horario}', [HorarioController::class, 'modificarh'])->name('modificarh'); //Guarda el registro de horarios
Route::post('guardarcambioh', [HorarioController::class, 'guardarcambioh'])->name('guardarcambioh'); //Guarda el registro de horarios

// rutas para horarios flexibles
Route::get('altahorariof',[HorariofController::class,'altahorariof'])->name('altahorariof');
Route::post('guardarhorariof',[HorariofController::class,'guardarhorariof'])->name('guardarhorariof');
Route::get('admin/horariosf',[HorariofController::class,'reportehorariof'])->name('horariosf');