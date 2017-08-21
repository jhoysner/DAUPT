@extends('layouts.app')

@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10col-md-offset-2">
            <div class="panel panel-default">
                <a href="{{url('aula/create')}}" class="btn btn-info" style="margin:2em;">Crear Aula</a>

                <div class="panel-body">
                    <table class="table">
                       <thead>
                       <tr>
                         <th>Numero</th>
                         <th>Capacidad</th>
                         <th>Action</th>
                         <th></th>
                       </tr>
                        @foreach($aulas as $aula)
                         <tr>
                             <td>{{$aula->aula}}</td>
                             <td>{{$aula->capacidad}}</td>
                             <td>
                             <a href="{{ route('aula.show',$aula->id )}}" class="btn btn-primary btn-xs" style="float:left;margin-right:5px"><i class="md md-visibility"></i></a>
                              <a href="{{ route('aula.edit',$aula->id )}}" class="btn btn-info btn-xs" style="float:left;margin-right:5px"> <i class="md md-edit"></i></a>
                              <form action="{{ route('aula.destroy',$aula->id )}}" method="post">
                                  <input type="hidden" name="_method" value="DELETE">
                                  {{ csrf_field() }}
                                  <button type="submit" class="btn btn-danger btn-xs" ><i class="md md-close"></i></button>
                              </form>

                             </td>
                         </tr>
                        @endforeach
                       </thead>
                       <tbody>

                       </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

