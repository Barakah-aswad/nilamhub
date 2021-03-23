@extends('layout.master')

  @section('title')
        Wolasi Post
  @endsection

  @section('content')
<div class="right_col" role="main">
          <!-- top tiles -->

          <div class="clearfix"></div>
              <div class="row">
                <div class="col-md-12">

                  <div class="x_panel">
                    <div class="alert alert-danger">
                        <h4><i class="fa fa-warning"></i> Perhatian!</h4> Harap untuk menginput data diri anda yang sebenar-benarnya.<br>
                        <a href="" class="alert-link">Apabila anda mengalami kendala klik link berikut untuk bantuan.</a> Memberikan informasi tidak benar akan dikenakan sanksi sesuai aturan hukum yang berlaku.

                      </div>
                  </div>
                  @if(session('warning'))
                    <div class="x_panel">
                      <div class="alert alert-warning">
                          <h4><i class="fa fa-warning"></i> Perhatian!</h4>{{session('warning')}}<br>
                          <a href="" class="alert-link">Apabila anda mengalami kendala klik link berikut untuk bantuan.</a>

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
                    <h2>User Terverifikasi</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama lengkap</th>
                          <th>Nomor KTP</th>
                          <th>Alamat Lengkap</th>
                          <th>Status</th>
                          <th>Waktu Verifikasi</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      @foreach($user as $users)
                      @if($users->verifed == 1)
                      <tbody>
                        <tr>
                          <th scope="row">{{$users->id}}</th>
                          <td>{{$users->first_name}}</td>
                          <td>{{$users->nomor_ktp}}</td>
                          <td>{{$users->alamat_lengkap}}</td>
                          <td><span class="badge badge-success">verifed</span></td>
                          <td>{{$users->waktu_verifikasi}}</td>
                          <td><a href="/aktifasi/{{$users->id}}">DETAIL</a></td>
                        </tr>
                      </tbody>
                      @endif
                      @endforeach
                    </table>

                  </div>
                </div>
              </div>
          </div>

              <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-6 col-sm-9 col-lg-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User Belum Terverifikasi</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama lengkap</th>
                          <th>Nomor KTP</th>
                          <th>Alamat Lengkap</th>
                          <th>Status</th>
                          <th>Waktu Registrasi</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      @foreach($user as $users)
                        @if($users->verifed == 0)
                      <tbody>
                        <tr>
                          <th scope="row">{{$users->id}}</th>
                          <td>{{$users->first_name}}</td>
                          <td>{{$users->nomor_ktp}}</td>
                          <td>{{$users->alamat_lengkap}}</td>
                          <td><span class="badge badge-danger">unverifed</span></td>
                          <td>{{$users->created_at}}</td>
                          <td><a href="/aktifasi/{{$users->id}}">DETAIL</a></td>
                        </tr>
                      </tbody>
                      @endif
                      @endforeach
                    </table>

                  </div>
                </div>
              </div>
          </div>
        </div>
  @endsection
  @section('footer')
  @endsection