@extends('layouts.app')

@extends('layouts.sidebar')

@section('content')
<div class="container">
    <a href="{{url('aula')}}" class="btn btn-info">Atras</a>
    <div class="row">
        <div class="col-md-10 ">
            <div class="panel ">

                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg" style="float:right;margin: 2em;">Asignar Materia</button>
                <h3 style="margin-left:1em;padding-top: 2em">Detalle de Aula: {{$aula->id}}</h3>
                 <div class="row">
                    <div class="col-md-2 col-md-offset-1">
                       <label for=""> Capacidad : {{$aula->capacidad}}</label>
                    </div>
                 </div>
                  <table class="table table-bordered">
                    <thead>
                      <th>Hora</th>
                      @foreach($dias as $dia)
                        <th id="{{$dia->id}}">{{$dia->dia}}</th>
                      @endforeach
                    </thead>
                    <tbody>


                    @foreach($tiempos as $tiempo)
                        <tr>

                        <td>{{$tiempo->hora}}</td>
                        <td>
                          @foreach($asignaciones as $asignacion)
                            @if($asignacion->tiempo_id == $tiempo->id AND $asignacion->dia_id == 1)

                              {{$asignacion->materia->nombre}}
                            @endif
                          @endforeach
                        </td>
                        <td>
                          @foreach($asignaciones as $asignacion)
                            @if($asignacion->tiempo_id == $tiempo->id AND $asignacion->dia_id == 2)

                              {{$asignacion->materia->nombre}}
                            @endif
                          @endforeach
                        </td>
                        <td>
                          @foreach($asignaciones as $asignacion)
                            @if($asignacion->tiempo_id == $tiempo->id AND $asignacion->dia_id == 3)

                              {{$asignacion->materia->nombre}}
                            @endif
                          @endforeach
                        </td>
                        <td>
                          @foreach($asignaciones as $asignacion)
                            @if($asignacion->tiempo_id == $tiempo->id AND $asignacion->dia_id == 4)

                              {{$asignacion->materia->nombre}}
                            @endif
                          @endforeach

                        </td>
                        <td>
                         @foreach($asignaciones as $asignacion)
                            @if($asignacion->tiempo_id == $tiempo->id AND $asignacion->dia_id == 5)

                              {{$asignacion->materia->nombre}}
                            @endif
                          @endforeach

                        </td>

                      </tr>

                    @endforeach

                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>



<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
       <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Asignar Materia al Horario</h4>
      </div>
      <form action="{{url('asignacion')}}" method="POST">
          {{ csrf_field() }}
      <div class="modal-body">

              <div class="row">
                  <div class="col-md-6">

                    <label for="">Materias</label>
                    <select name="materia_id" id="" class="form-control">
                      @foreach($materias as $materia)
                        <option value="{{$materia->id}}">{{$materia->nombre}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-md-6">

                    <label for="">Dia</label>
                    <select name="dia_id" id="" class="form-control">
                      @foreach($dias as $dia)
                        <option value="{{$dia->id}}">{{$dia->dia}}</option>
                      @endforeach
                    </select>
                  </div>

              </div>
              <div class="row">
                  <div class="col-md-6">

                    <label for="">Hora</label>
                    <select name="tiempo_id" id="" class="form-control">
                      @foreach($tiempos as $tiempo)
                        <option value="{{$tiempo->id}}">{{$tiempo->hora}}</option>
                      @endforeach
                    </select>
                  </div>
                  <input type="hidden" name="aula_id" value="{{$aula->id}}">
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection
