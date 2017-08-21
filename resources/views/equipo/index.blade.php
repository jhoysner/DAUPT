@extends('layouts.app')

@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10col-md-offset-2">
            <div class="panel panel-default">
                <a href="{{url('equipo/create')}}" class="btn btn-info" style="margin:2em;">Crear equipo</a>

                <div class="panel-body">
                    <table class="table">
                       <thead>
                       <tr>
                         <th>Id</th>
                         <th>Name</th>
                         <th>Action</th>
                         <th></th>
                       </tr>
                        @foreach($equipos as $equipo)
                         <tr>
                             <td>{{$equipo->id}}</td>
                             <td>{{$equipo->name}}</td>
                             <td>
                              <a href="{{ route('equipo.edit',$equipo->id )}}" class="btn btn-info btn-xs" style="float:left;margin-right:5px"> <i class="md md-edit"></i></a>
                              <form action="{{ route('equipo.destroy',$equipo->id )}}" method="post">
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