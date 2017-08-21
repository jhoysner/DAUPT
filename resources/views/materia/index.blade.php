@extends('layouts.app')

@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10col-md-offset-2">
            <div class="panel panel-default">
                <a href="{{url('materia/create')}}" class="btn btn-info" style="margin:2em;">Crear Materia</a>

                <div class="panel-body">
                    <table class="table">
                       <thead>
                       <tr>
                         <th>Id</th>
                         <th>Nombre</th>
                         <th>Action</th>
                       </tr>
                        @foreach($materias as $materia)
                         <tr>
                             <td>{{$materia->id}}</td>
                             <td>{{$materia->nombre}}</td>
                             <td>
                              <a href="{{ route('materia.edit',$materia->id )}}" class="btn btn-info btn-xs" style="float:left;margin-right:5px"> <i class="md md-edit"></i></a>
                              <form action="{{ route('materia.destroy',$materia->id )}}" method="post">
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

