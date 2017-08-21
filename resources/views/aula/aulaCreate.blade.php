@extends('layouts.app')

@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <a href="{{url('aula')}}" class="btn btn-info pull-right" style="margin:2em;">BACK</a>
                <h3 style="margin-left:1em;padding-top: 2em">Creating Aula</h3>
                <form action="{{url('aula')}}" method="POST">
                    {{ csrf_field() }}

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                    <div class="col-md-4">
                                        <label for="aula" class="control-label">Aula</label>
                                        <input id="aula" type="text" class="form-control" name="aula" required autofocus>

                                    </div>
                            </div>

                        </div>
                        <br>
                         <div class="row">
                            <div class="col-md-12">

                                <div class="col-md-4">
                                        <label for="capacidad" class="control-label">Capacidad</label>
                                        <input id="capacidad" type="text" class="form-control" name="capacidad" required autofocus>

                                </div>
                            </div>
                         </div>
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

