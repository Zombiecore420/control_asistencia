@extends('index')
@section('content_header')
   <h4> Reporte de Horario </h4> 
@stop
@section('contenido')

<table class="table table-hover table-responsive-xl">
    <thead>
        <tr>
            <th scope="col" style="text-align: center">Nombre del horario</th>
            <th scope="col" style="text-align: center">Dia</th>
            <th scope="col" style="text-align: center">Hora entrada</th>
            <th scope="col" style="text-align: center">Hora salida</th>
            <th scope="col" style="text-align: center">Operaciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($cs as $ccs)
        <tr>
            <td style="text-align: center">{{$ccs-> nombre_horario }}</td>
            <td style="text-align: center">{{$ccs-> nombre_dia}}</td>
            <td style="text-align: center">{{$ccs-> hora_entrada}}</td>
            <td style="text-align: center">{{$ccs-> hora_salida}}</td>
            <td style="text-align: center">    
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <a href="#">
                    <button class="btn btn-outline-primary btn-sm" type="button" style="margin-right 10px">Editar</button>
                    </a>
                    <a href="#">
                    <button class="btn btn-outline-info btn-sm" type="button" style="margin-right 10px">
                    Activar
                    </button>
                    </a>
                    <a href="#">
                    <button class="btn btn-outline-danger btn-sm" type="button">Eliminar</button>
                    </a>
                    <a href="#">
                    <button class="btn btn-outline-warning btn-sm" type="button" style="margin-right 10px">Desactivar</button>
                    </a>
                </div> 
            </td>
        </tr>
    @endforeach
    </tbody>
    </thead>
</table>
@stop