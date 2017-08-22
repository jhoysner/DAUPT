@extends('layouts.app')

@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <a href="{{url('materia')}}" class="btn btn-info pull-right" style="margin:2em;">BACK</a>
                <h3 style="margin-left:1em;padding-top: 2em">Creating Materia</h3>
                <form action="{{route('materia.update',$materia->id)}}" method="POST">
                     {{ csrf_field() }}
                     <input type="hidden" name="_method" value="PUT">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                    <div class="col-md-4">
                                        <label for="nombre" class="control-label">Materia</label>
                                        <input id="nombre" type="text" class="form-control" name="nombre" required autofocus value="{{$materia->nombre}}">

                                    </div>
                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="container">
                                    <div class="form-group">
                                          <button type="submit" class="btn btn-success" style="margin-top:2em;">SEND</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

