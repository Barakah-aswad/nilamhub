@extends('layout.master_login')
@section('content')
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title"> Registrasi Akun </h3>
        </div>

        <div class="panel-body">
          <form action="/register" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" name="first_name" class="form-control" placeholder="Nama Lengkap">
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" name="last_name" class="form-control" placeholder="Nama Pangilan">
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" name="email" class="form-control" placeholder="Email">
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password" required>
              </div>
            </div>

            <div class="form-group">
              <input type="submit" value="Register" class="btn btn-success pull-right">
            </div>

            <a href="{{url('/login')}}">Sudah Punya Akun? Login</a>

          </form>
        </div>
      </div>
    </div>
  </div>
@endsection