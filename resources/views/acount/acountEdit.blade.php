@extends('layouts.app')

@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <a href="{{url('acount')}}" class="btn btn-info pull-right" style="margin:2em;">BACK</a>
                <h3 style="margin-left:1em;padding-top: 2em">Editing Acount</h3>
                <form action="{{route('acount.update',$acount->id)}}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="title">Name</label>
                                <input type="text" class="form-control" name="name" value="{{$acount->name}}" required><br>

                                <label for="title">Description</label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="10" value="description">{{$acount->description}}</textarea>
                             </div>
                        </div>

                        <div class="form-group">
                              <button type="submit" class="btn btn-success" style="margin-top:2em;">SEND</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
