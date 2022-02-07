@extends('index')

@section('content_header')
   <h4> Reporte de Horarios  </h4> 
@stop

@section('contenido')

<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="form-group row float-right">
              <div class="col-md-auto"> 
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Nuevo Horario
              </button>
            </div>
            <div class="col-md-auto"> 
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
              Asignar Horario
              </button>
            </div>
            </div>
            <table class="table table-striped" style="text-align:center;">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre Del Horario</th>
                  <th scope="col">Horas Semanales</th>
                  <th scope="col">Dias Semanales</th>
                  <th scope="col">Empleados</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Operaciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Matutino</td>
                  <td>50</td>
                  <td>5</td>
                  <td>3</td>
                  <td>Administración</td>
                  <td>
                  <a href="" name="asignar" value="" data-toggle="modal" data-target="#exampleModal3" class="btn btn-sm btn-warning">Editar</a>
                    <a href="" class="btn btn-sm btn-danger">Eliminar</a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Vespertino</td>
                  <td>55</td>
                  <td>5</td>
                  <td>3</td>
                  <td>Administración</td>
                  <td>
                    <a href="" name="asignar" value="" data-toggle="modal" data-target="#exampleModal3" class="btn btn-sm btn-warning">Editar</a>
                    <a href="" class="btn btn-sm btn-danger">Eliminar</a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Mixto</td>
                  <td>55</td>
                  <td>5</td>
                  <td>3</td>
                  <td>Administración</td>
                  <td>
                    <a href="" name="asignar" value="" data-toggle="modal" data-target="#exampleModal3" class="btn btn-sm btn-warning">Editar</a>
                    <a href="" class="btn btn-sm btn-danger">Eliminar</a>
                  </td>
                </tr>
              </tbody>
            </table>

       
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
                  <form method="POST" action="{{  route('guardarhorario') }}" class="form-horizontal m-t-30" enctype="multipart/form-data">
                    {{ csrf_field() }} 

            

                    <div class="form-group">
                      <label for="a">Nombre Horario</label>
                      <input type="text" class="form-control"  name="nombre_horario[]" placeholder="Ejemplo: Matutino">
                      <small id="" class="form-text text-muted">Ingresa el nombre del horario.</small>
                    </div>

                    <div class="form-group">
                        <div class="form-checkbox">
                        <input type="checkbox" class="form-checkbox-input" id="nombre_d"  name="nombre_dia[]" value="Lunes">
                        <label class="form-checkbox-label" for="exampleCheck1">Lunes</label>
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
                      <input type="checkbox" class="form-checkbox-input" id="nombre_d" name="nombre_dia[]" value="Martes">
                      <label class="form-checkbox-label" for="exampleCheck1">Martes</label>
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
                  
                    <input type="text" name="diass" style="display:none"  id="diass" value="">
                    

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                      <button type="button" id="enviar" class="btn btn-success">Guardar</button>

                      <button type="submit" style="display:none" id="send" class="btn btn-success">Guardar</button>

                    </div>
                  </form>

                  <div class="form-group col-md-12"> 
                    @php
                      $success = Session::get('success');
                    @endphp
                    @if($success)
                    <div class="alert alert-success">{{ $success }}</div>
                    @endif
                  </div>

                
                  
                </div>
               
              </div>
            </div>
          </div>
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
                  <div class="form-group">
                    <label for="">Fecha De Inicio</label>
                    <input type="date" class="form-control" id="date" aria-describedby="datehelp">
                  </div>   
                  <div class="form-group">
                    <label for="">Fecha De Finalización</label>
                    <input type="date" class="form-control" id="date" aria-describedby="datehelp">
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

          <!-- Modal Editar -->
          
          <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel3">Editar Horario</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="a">Nombre Horario</label>
                      <input type="text" class="form-control" id="a" aria-describedby="emailHelp" readonly placeholder="Matutino">
                      <div class="form-checkbox">
                      <br>
                      <input type="checkbox" class="form-checkbox-input" id="exampleCheck1">
                      <label class="form-checkbox-label" for="exampleCheck1">Lunes</label>
                      <div class="row">
                        <div class="col">
                          <input type="time" class="form-control" placeholder="9:00 AM">
                        </div>
                        <P> - </P>
                        <div class="col">
                          <input type="time" class="form-control" placeholder="17:00 PM">
                        </div>
                      </div>
                    </div>
                    <div class="form-checkbox">
                      <br>
                      <input type="checkbox" class="form-checkbox-input" id="exampleCheck1">
                      <label class="form-checkbox-label" for="exampleCheck1">Martes</label>
                      <div class="row">
                        <div class="col">
                          <input type="time" class="form-control" placeholder="9:00 AM">
                        </div>
                        <P> - </P>
                        <div class="col">
                          <input type="time" class="form-control" placeholder="17:00 PM">
                        </div>
                      </div>
                    </div>
                    <div class="form-checkbox">
                      <br>
                      <input type="checkbox" class="form-checkbox-input" id="exampleCheck1">
                      <label class="form-checkbox-label" for="exampleCheck1">Miercoles</label>
                      <div class="row">
                        <div class="col">
                          <input type="time" class="form-control" placeholder="9:00 AM">
                        </div>
                        <P> - </P>
                        <div class="col">
                          <input type="time" class="form-control" placeholder="17:00 PM">
                        </div>
                      </div>
                    </div>
                    <div class="form-checkbox">
                      <br>
                      <input type="checkbox" class="form-checkbox-input" id="exampleCheck1">
                      <label class="form-checkbox-label" for="exampleCheck1">Jueves</label>
                      <div class="row">
                        <div class="col">
                          <input type="time" class="form-control" placeholder="9:00 AM">
                        </div>
                        <P> - </P>
                        <div class="col">
                          <input type="time" class="form-control" placeholder="17:00 PM">
                        </div>
                      </div>
                    </div>
                    <div class="form-checkbox">
                      <br>
                      <input type="checkbox" class="form-checkbox-input" id="exampleCheck1">
                      <label class="form-checkbox-label" for="exampleCheck1">Viernes</label>
                      <div class="row">
                        <div class="col">
                          <input type="time" class="form-control" placeholder="9:00 AM">
                        </div>
                        <P> - </P>
                        <div class="col">
                          <input type="time" class="form-control" placeholder="17:00 PM">
                        </div>
                      </div>
                    </div>
                    <div class="form-checkbox">
                      <br>
                      <input type="checkbox" class="form-checkbox-input" id="exampleCheck1">
                      <label class="form-checkbox-label" for="exampleCheck1">Sabado</label>
                      <div class="row">
                        <div class="col">
                          <input type="time" class="form-control" placeholder="9:00 AM">
                        </div>
                        <P> - </P>
                        <div class="col">
                          <input type="time" class="form-control" placeholder="17:00 PM">
                        </div>
                      </div>
                    </div>
                    <div class="form-checkbox">
                      <br>
                      <input type="checkbox" class="form-checkbox-input" id="exampleCheck1">
                      <label class="form-checkbox-label" for="exampleCheck1">Domingo</label>
                      <div class="row">
                        <div class="col">
                          <input type="time" class="form-control" placeholder="9:00 AM">
                        </div>
                        <P> - </P>
                        <div class="col">
                          <input type="time" class="form-control" placeholder="17:00 PM">
                        </div>
                      </div>
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