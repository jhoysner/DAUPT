@extends('layouts.app')

@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10col-md-offset-2">
            <div class="panel panel-default">
                <a href="{{url('daily')}}" class="btn btn-info pull-right" style="margin:2em;">BACK</a>
                <h3 style="margin-left:1em;padding-top: 2em">Creating Daily</h3>
                <form action="{{url('daily')}}" method="POST">
                    {{ csrf_field() }}

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="title">Code</label>
                                        <input type="text" class="form-control" name="code" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="title">Type</label><br>
                                          <input type="radio" name="type" value="1"> Venta<br>
                                          <input type="radio" name="type" value="2"> Compra<br>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="title">Detail
                                        </label>
                                        <input type="text" class="form-control" name="detail" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="title">Acount</label>
                                        <select name="account_id"  class="form-control">
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
                                <textarea class="form-control" name="description" id="" cols="30" rows="10" value="description" ></textarea>
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
