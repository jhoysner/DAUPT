@extends('layouts.app')

@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10col-md-offset-2">
            <div class="panel panel-default">
                <a href="{{url('user/create')}}" class="btn btn-info" style="margin:2em;">Crear Usuario</a>

                <div class="panel-body">
                    <table class="table">
                       <thead>
                       <tr>
                         <th>Id</th>
                         <th>email</th>
                         <th>Action</th>
                         <th></th>
                       </tr>
                        @foreach($users as $user)
                         <tr>
                             <td>{{$user->id}}</td>
                             <td>{{$user->email}}</td>
                             <td>
                              <a href="{{ route('user.edit',$user->id )}}" class="btn btn-info btn-xs" style="float:left;margin-right:5px"> <i class="md md-edit"></i></a>
                              <form action="{{ route('user.destroy',$user->id )}}" method="post">
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