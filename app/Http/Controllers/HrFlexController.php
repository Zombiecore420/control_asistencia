<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\hrflex;

class HrFlexController extends Controller
{
    public function altahrflex() //ordena los valores de la base de datos y le añade + 1 a los campos para que se agreguen
    {
        $consulta = hrflex::orderBy('id_horario', 'ASC')
                            ->get();
        $cuantos = count($consulta);
        if($cuantos==0)
        {
            $idsigue = 1;
        }
        else{
            $idsigue = $consulta[0]->id_horario + 1;
        }
        return view('admin.hrflex')
                ->with('idsigue', $idsigue);        
    }


    public function guardarhrflex(Request $request){


        $nombre_horario = $request->nombre_horario;
        $nombre_dia = $request->nombre_dia;
        $hora_entrada = $request->hora_entrada;
        $hora_salida = $request->hora_salida;
        $diass = $request->diass;

        for($i=0;  $i<$diass; $i++) {
            $datasave = [
                'nombre_horario' => $nombre_horario[0],
                'nombre_dia' => $nombre_dia[$i],
                'hora_entrada' => $hora_entrada[$i],
                'hora_salida' => $hora_salida[$i]
              
            ];
           DB::table('hrflexes')->insert($datasave);
       }
       Session::flash('mensaje', 'El horario: ha sido agredado correctamente.');
       return redirect()->route('hrflex');
   }
   public function reportehrflex(){

     $ab = DB::table('hrflexes')
     ->select('hrflexes.nombre_horario','hrflexes.nombre_dia', 'hrflexes.hora_entrada','hrflexes.hora_salida')
     ->get();  
     return view ('admin.hrflex')
     ->with('ab',$ab);
   }
}
