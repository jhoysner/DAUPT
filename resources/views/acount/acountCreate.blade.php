@extends('layouts.app')

@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <a href="{{url('acount')}}" class="btn btn-info pull-right" style="margin:2em;">BACK</a>   
                <h3 style="margin-left:1em;padding-top: 2em">Creating Acount</h3>
                <form action="{{url('acount')}}" method="POST">
                    {{ csrf_field() }}

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                            <label for="title">Name</label>
                            <input type="text" class="form-control" name="name" required><br>
                                
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
