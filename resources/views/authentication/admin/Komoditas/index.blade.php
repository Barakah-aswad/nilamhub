@extends('layout.master')

  @section('title')
        Wolasi Post
  @endsection

  @section('content')
      <div class="right_col" role="main">
          <div class="clearfix"></div>
              <div class="row">
                <div class="col-md-12">

                  @if(session('warning'))
                    <div class="x_panel">
                      <div class="alert alert-success">
                          <h4><i class="fa fa-warning"></i> Perhatian!</h4>{{session('warning')}}<br>
                          <a href="" class="alert-link">Apabila anda mengalami kendala klik link berikut untuk bantuan.</a>

                        </div>
                    </div>
                    @endif
                    @if(session('success'))
                    <div class="x_panel">
                      <div class="alert alert-success">
                          <h4><i class="fa fa-warning"></i> {{session('success')}}</h4>
                        </div>
                    </div>
                    @endif
                </div>
              </div>

              <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-6 col-sm-9 col-lg-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daftar Komoditas</small></h2>
                       <ul class="nav navbar-right panel_toolbox">
                      <li>
                       <a class="btn btn-primary" href="/tambah-komoditas"><i class="fa fa-plus-circle"> TAMBAH KOMODITAS</i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama Komoditas</th>
                          <th>Masa Tanam</th>
                          <th>Ph Tanah</th>
                          <th>Tinggi DPL</th>
                          <th> -- </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($komoditas as $komoditi)
                        <tr>
                          <th scope="row">{{$komoditi->id}}</th>
                          <td>{{$komoditi->tanaman->nama_tanaman}}</td>
                          <td>{{$komoditi->masa_tanam}} - Hari</td>
                          <td>{{$komoditi->ph_tanah}}</td>
                          <td>{{$komoditi->stdr_tinggi_lahan}} - M</td>
                          <td><a href="/komoditas-detail/{{$komoditi->id}}">DETAIL</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
          </div>
      </div>
  @endsection
  @section('footer')
  @endsection