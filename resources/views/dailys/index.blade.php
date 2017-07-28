@extends('layouts.app')

@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10col-md-offset-2">
            <div class="panel panel-default">
                <a href="{{url('daily/create')}}" class="btn btn-info" style="margin:2em;">CREATE DAILY</a>

                <div class="panel-body">
                    <table class="table">
                       <thead>
                       <tr>
                         <th>Id</th>
                         <th>code</th>
                         <th>Description</th>
                         <th>type</th>
                         <th>Detail</th>
                         <th>User</th>
                         <th>Account</th>
                         <th>Action</th>
                         <th></th>
                       </tr>
                        @foreach($dailys as $daily)
                         <tr>
                             <td>{{$daily->id}}</td>
                             <td>{{$daily->code}}</td>
                             <td>{{$daily->description}}</td>
                             <td>{{$daily->type}}</td>
                             <td>{{$daily->detail}}</td>
                             <td>{{$daily->user_id}}</td>
                             <td>{{$daily->account_id}}</td>
                             <td>
                              <a href="{{ route('daily.edit',$daily->id )}}" class="btn btn-info btn-xs" style="float:left;margin-right:5px"> Editar</a>
                              <form action="{{ route('daily.destroy',$daily->id )}}" method="post">
                                  <input type="hidden" name="_method" value="DELETE">
                                  {{ csrf_field() }}
                                  <button type="submit" class="btn btn-danger btn-xs" >Eliminar</button>
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
