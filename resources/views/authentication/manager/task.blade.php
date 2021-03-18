@extends('layout.master_login')
@section('content')

                <h3>AKUN ANDA MASIH DALAM STATUS <b>PENGUNJUNG</b></h3>

           <form action="/posts" method="POST">

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

                  {{ csrf_field() }}


                 <input type="test" name="test" class="form-control @error('test') in-invalid @enderror" value="{{ old('test') }}" required autocomplete="test" autofocus/>

                @error('test')
                  <span class="in-invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror


                <input class="btn btn-success pull-right" type="submit" value="Submit data">
           </form>

                  <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Dibuat</th>
                        <th scope="col">Diupdate</th>
                        <th scope="col" colspan="2" style="text-align: center;">Aksi</th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach($databaru as $data)
                      <tr>
                        <th scope="row">{{$data->id}}</th>
                          <td>{{$data->test}}</td>
                          <td>{{$data->created_at}}</td>
                          <td>{{$data->updated_at}}</td>
                          <td><a href="/update/{{$data->id}}/edit" class="btn btn-primary">Ubah</a></td>
                          <td><a href="/delete/{{$data->id}}" class="btn btn-danger">Hapus</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                  </table>


                <form action="/logout" method="POST" id="logout-form">
                  {{ csrf_field() }}
                  <a class="btn btn-danger" href="#" onclick="document.getElementById('logout-form').submit()">Logout</a>
                </form>
@endsection