@extends('index')
@section('content_header')
   <h4> Reporte de horarios Flexibles </h4> 
@stop
@section('contenido')
@if(Session::has('mensaje'))
<div class="alert alert-success">{{Session::get('mensaje')}}</div>
@endif

<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="form-group row float-right">
          <div class="col-md-auto"> 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Crear horario flexible
            </button>
          </div>
          <div class="col-md-auto"> 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
            Asignar Horario
            </button>
          </div>
        </div>
      </div>
     
  <br>
  <div class="container">
   
    <table class="table table-hover table-responsive-xl">
      <thead>
          <tr>
            <th scope="col" style="text-align: center">#</th>
              <th scope="col" style="text-align: center">Nombre del horario</th>
              <th scope="col" style="text-align: center">Dia</th>
              <th scope="col" style="text-align: center">Hora entrada</th>
              <th scope="col" style="text-align: center">Hora salida</th>
              <th scope="col" style="text-align: center">Operaciones</th>
          </tr>
      </thead>
      <tbody>
      @foreach($ab as $abb)
          <tr>
            <td style="text-align: center">{{$abb-> id_horario }}</td>
              <td style="text-align: center">{{$abb-> nombre_horario }}</td>
              <td style="text-align: center">{{$abb-> nombre_dia}}</td>
              <td style="text-align: center">{{$abb-> hora_entrada}}</td>
              <td style="text-align: center">{{$abb-> hora_salida}}</td>
              <td style="text-align: center">    
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    @if($abb->deleted_at)  
                      <a href="{{route('activarhrflex',['id_horario' => $abb->id_horario])}}">
                      <button class="btn btn-outline-info btn-sm" type="button" style="margin-right 10px">
                      Activar
                      </button>
                      </a>
                      <a href="{{route('eliminarhrflex',['id_horario' => $abb->id_horario])}}">
                      <button class="btn btn-outline-danger btn-sm" type="button">Eliminar</button>
                      </a>
                      @else 
                      <a href="{{route('desactivarhrflex',['id_horario' => $abb->id_horario])}}">
                      <button class="btn btn-outline-warning btn-sm" type="button" style="margin-right 10px">Desactivar</button>
                      </a>
                      @endif
                  </div> 
              </td>
          </tr>
      @endforeach
      </tbody>
      </thead>
  </table>
  </div>
</div>
  
  <!-- Modal Crear Horario-->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crear Horario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

     

        <div class="modal-body">
          <form method="POST" action="{{  route('guardarhrflex') }}" class="form-horizontal m-t-30" enctype="multipart/form-data">
            {{ csrf_field() }} 

            

            <div class="form-group">
              <label for="a">Nombre Horario</label>
              <input type="text" class="form-control"  name="nombre_horario[]" placeholder="Ejemplo: Matutino">
              <small id="" class="form-text text-muted">Ingresa el nombre del horario.</small>
            </div>

            <div class="form-group">
             
             
                <div class="form-checkbox">
                  <input type="checkbox" class="form-checkbox-input"  name="nombre_dia[]" value="Lunes">
                <label class="form-checkbox-label" for="">Lunes</label>
                <div class="row">
                  <div class="col">
                    <input type="time" class="form-control" name="hora_entrada[]"  placeholder="9:00 AM">
                  </div>
                  <P> - </P>
                  <div class="col">
                    <input type="time" class="form-control"   name="hora_salida[]">
                  </div>
                </div>
            </div>
          
            
            <div class="form-group">
              <div class="form-checkbox">
              <input type="checkbox" class="form-checkbox-input"  name="nombre_dia[]" value="Martes">
              <label class="form-checkbox-label" for="">Martes</label>
              <div class="row">
                <div class="col">
                  <input type="time" class="form-control" name="hora_entrada[]"  placeholder="9:00 AM">
                </div>
                <P> - </P>
                <div class="col">
                  <input type="time" class="form-control"  name="hora_salida[]" placeholder="17:00 PM">
                </div>
              </div>
            </div>
          
            <div class="form-group">
              <div class="form-checkbox">
              <input type="checkbox" class="form-checkbox-input"  name="nombre_dia[]" value="Miercoles">
              <label class="form-checkbox-label" for="">Miercoles</label>
              <div class="row">
                <div class="col">
                  <input type="time" class="form-control" name="hora_entrada[]"  placeholder="9:00 AM">
                </div>
                <P> - </P>
                <div class="col">
                  <input type="time" class="form-control"  name="hora_salida[]" placeholder="17:00 PM">
                </div>
              </div>
            </div>
          
            <div class="form-group">
              <div class="form-checkbox">
              <input type="checkbox" class="form-checkbox-input"  name="nombre_dia[]" value="Jueves">
              <label class="form-checkbox-label" for="">Jueves</label>
              <div class="row">
                <div class="col">
                  <input type="time" class="form-control" name="hora_entrada[]"  placeholder="9:00 AM">
                </div>
                <P> - </P>
                <div class="col">
                  <input type="time" class="form-control"  name="hora_salida[]" placeholder="17:00 PM">
                </div>
              </div>
            </div>
          
            <div class="form-group">
              <div class="form-checkbox">
              <input type="checkbox" class="form-checkbox-input"  name="nombre_dia[]" value="Viernes">
              <label class="form-checkbox-label" for="">Viernes</label>
              <div class="row">
                <div class="col">
                  <input type="time" class="form-control" name="hora_entrada[]"  placeholder="9:00 AM">
                </div>
                <P> - </P>
                <div class="col">
                  <input type="time" class="form-control"  name="hora_salida[]" placeholder="17:00 PM">
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>
            


            <input type="text" name="diass" style="display:none"  id="diass" value=""> <!-- input para obtener la longitud de los checks--->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" id="enviar" class="btn btn-success">Guardar</button> 
              <button type="submit" style="display:none" id="send" class="btn btn-success">Guardar</button> <!-- boton js--->
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div> <!-- FIN DE Modal para horarios flexibles-->
</div>
 
  
    <!-- Modal Asignaciones -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel2">Asignación de horario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Colaborador:</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option selected>Selecciona una opción...</option>
              <option value="1">Alex Palma</option>
              <option value="2">Manuel Martínez</option>
              <option value="3">Daniela Adrian</option>
            </select>
          </div>
          
          <div class="form-group">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Horario:</label>
            <select class="form-control" id="exampleFormControlSelect2">
              <option selected>Selecciona una opción...</option>
              <option value="1">Matutino</option>
              <option value="2">Vespertino</option>
              <option value="3">Mixto</option>
            </select> 
          </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-success">Guardar</button>
        </div>
      </div>
    </div>
  </div>
  </div>
  
  <script>
    document.getElementById('enviar').onclick = function(){
      var dias = $('input:checkbox:checked').length 
      var gg = document.getElementById('diass');
      gg.value = dias
      document.getElementById('send').click()
      if(gg > 0 ){
      }console.log(gg);
    }
  </script>
  
  

  @stop