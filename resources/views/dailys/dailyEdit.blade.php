@extends('layouts.app')

@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <a href="{{url('daily')}}" class="btn btn-info pull-right" style="margin:2em;">BACK</a>
                <h3 style="margin-left:1em;padding-top: 2em">Editing Acount</h3>
                <form action="{{route('daily.update',$daily->id)}}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="title">Code</label>
                                        <input type="text" class="form-control" name="code" value="{{$daily->code}}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="title">Type</label>
                                        <input type="text" class="form-control" name="type" value="{{$daily->type}}" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="title">Detail
                                        </label>
                                        <input type="text" class="form-control" name="detail" value="{{$daily->detail}}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="title">Acount</label>
                                        <select name="account_id"  class="form-control" required>
                                            <option value="{{$accountOne->id}}">{{$accountOne->name}}</option>
                                            <option>------------</option>
                                            @foreach($accounts as $account)
                                                <option value="{{$account->id}}">{{$account->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <input type="hidden" class="form-control" name="user_id" value="{{Auth::id()}}" required>
                                </div>
                                <br>

                            </div>
                            <div class="col-md-6">
                                <label for="title">Description</label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="10" value="description" >{{$daily->description}}</textarea>
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
