@extends('layout.master_login')
@section('content')

  <div class="row">
    <div class="col-sm-4 col-sm-12 col-sm-offset-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title"> Reset Password </h3>
        </div>

        <div class="panel-body">
          <form action="" method="POST">

            @if(count($errors) > 0)
              <div class="alert alert-danger">
                <ul>
                  @foreach($errors->all() as $error)
                  <li>
                    {{ $error }}
                  </li>
                  @endforeach
                </ul>
              </div>
              @endif

            {{ csrf_field() }}

            <div class="form-group">
              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                <input type="Password" name="password" class="form-control @error('password') in-invalid @enderror" placeholder="password" value="{{ old('password') }}" required autocomplete="password" autofocus/>

              </div>
            </div>

            <div class="form-group">
              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                <input type="password" name="password_confirmation" class="form-control @error('password') in-invalid @enderror" placeholder="password_confirmation" value="{{ old('password_confirmation') }}" required autocomplete="password_confirmation" autofocus/>

              </div>
            </div>


            <div class="form-group">
              <input type="submit" value="Reset Password" class="btn btn-success pull-right">
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
@endsection