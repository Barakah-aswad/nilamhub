@extends('layout.master_login')
@section('content')
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title"> Edit User </h3>
        </div>

        <div class="panel-body">
          <form action="/user/{{$user->id}}" method="POST">

            {{ method_field('PUT') }}
            {{ csrf_field() }}

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" name="first_name" class="form-control" value="{{$user->first_name}}">
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" name="last_name" class="form-control" value="{{$user->last_name}}">
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                <input type="text" name="location" class="form-control" value="{{$user->location}}">
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" name="email" class="form-control" value="{{$user->email}}">
              </div>
            </div>

            <div class="form-group">
              <input type="submit" value="Simpan" class="btn btn-success pull-right">
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
@endsection