@extends('layout.master_login')
@section('content')

  <div class="row">
    <div class="col-sm-4 col-sm-12 col-sm-offset-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title"> Login Form </h3>
        </div>

        <div class="panel-body">
          <form action="/login" method="POST">
            {{ csrf_field() }}

            @if(session('error'))
            <div class="alert alert-danger">
              {{ session('error') }}
            </div>
            @endif

            @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
            @endif

            <div class="form-group">
              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                <input type="email" name="email" class="form-control @error('email') in-invalid @enderror" placeholder="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>

                @error('email')
                  <span class="in-invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror

              </div>
            </div>

       

            <div class="form-group">
              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                <input type="password" class="form-control @error('password') in-invalid @enderror" name="password"  placeholder="Password" required autocomplete="current-password"/>

                 @error('password')
                  <span class="in-invalid-feedback" role="alert"> 
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror

              </div>
            </div>

            <div class="form-group">
              <div class="input-group">

                <input type="checkbox" name="remember_Me"/>
                Remember Me 
              </div>
            </div>
                  <a href="{{url('/forgot-password')}}">Lupa Password?</a>
            <div class="form-group">
              <input type="submit" value="LOGIN" class="btn btn-success pull-right">
            </div>

          </form>
          
        </div>
      </div>
    </div>
  </div>
@endsection