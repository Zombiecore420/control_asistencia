<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\detalle_hrs; 
use App\Models\dias;
use Session;

class AsistenciaController extends Controller
{
    public function altahorario(){

        $consulta = detalle_hrs::orderBy('id_detalle', 'ASC')
        ->get();
        $contador = count($consulta);
        if($contador == 0)
        {
            $idsig = 1;
        }
        else{
           $idsig = $consulta->id_detalle +1;
        }
        
        $dias = dias::all();
         return view('admin.horario')   
                ->with('idsig', $idsig)
                ->with('dias',$dias);
    }

    public function guardarhorario(Request $request){

         /**dd($request->all());**/
        
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
            DB::table('dias')->insert($datasave);
        }
        Session::put('success', "datos guardados");
       
        return redirect()->route('reportehorario');
    }

    public function reportehorario()
    {
       $cs = DB::table('dias')
        ->select('dias.nombre_horario','dias.nombre_dia', 'dias.hora_entrada','dias.hora_salida')
        ->get();  
        return view ('admin.reportehorario')
        ->with('cs',$cs);
    }    
}
