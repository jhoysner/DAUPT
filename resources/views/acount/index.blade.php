@extends('layouts.app')

@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10col-md-offset-2">
            <div class="panel panel-default">
                <a href="{{url('acount/create')}}" class="btn btn-info" style="margin:2em;">CREATE ACOUNT</a>

                <div class="panel-body">
                    <table class="table">
                       <thead>
                       <tr>
                         <th>Id</th>
                         <th>Name</th>
                         <th>Description</th>
                         <th>Action</th>
                         <th></th>
                       </tr>
                        @foreach($acounts as $acount)
                         <tr>
                             <td>{{$acount->id}}</td>
                             <td>{{$acount->name}}</td>
                             <td>{{$acount->description}}</td>
                             <td>
	                            <a href="{{ route('acount.edit',$acount->id )}}" class="btn btn-info btn-xs" style="float:left;margin-right:5px"> Editar</a>
	                            <form action="{{ route('acount.destroy',$acount->id )}}" method="post">
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
