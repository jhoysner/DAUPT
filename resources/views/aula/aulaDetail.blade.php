@extends('layouts.app')

@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 ">
            <div class="panel ">
                <a href="{{url('aula')}}" class="btn btn-info pull-right" style="margin:2em;">BACK</a>
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
@endsection

