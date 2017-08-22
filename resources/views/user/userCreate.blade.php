@extends('layouts.app')

@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10col-md-offset-2">
            <div class="panel panel-default">
                <a href="{{url('user')}}" class="btn btn-info pull-right" style="margin:2em;">BACK</a>
                <h3 style="margin-left:1em;padding-top: 2em">Creating User</h3>
                <form action="{{url('user')}}" method="POST">
                    {{ csrf_field() }}

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="name" class="control-label">Name</label>
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="control-label">E-Mail </label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    </div>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="password" class="control-label">Password</label>
                                        <input id="password" type="password" class="form-control" name="password" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="password" class="control-label">Confirm Password</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>

                                </div>
                                <br>

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
