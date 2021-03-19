@extends('layout.master_login')
@section('content')

  <div class="row">
    <div class="col-sm-4 col-sm-12 col-sm-offset-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title"> Lupa Password </h3>
        </div>

        <div class="panel-body">
          <form action="/lupa-password" method="POST">
            {{ csrf_field() }}

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
              <input type="submit" value="Kirim" class="btn btn-success pull-right">
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
@endsection