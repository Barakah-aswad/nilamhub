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
                </div>
              </div>

              <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-6 col-sm-9 col-lg-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>TOTAL USER</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama lengkap</th>
                          <th>Nama Pangilan</th>
                          <th>Email</th>
                          <th>Last Login</th>
                          <th>Dibuat</th>
                          <th colspan="2">Aksi</th>
                        </tr>
                      </thead>
                      @foreach($user as $users)
                      <tbody>
                        <tr>
                          <th scope="row">{{$users->id}}</th>
                          <td>{{$users->first_name}}</td>
                          <td>{{$users->last_name}}</td>
                          <td>{{$users->email}}</td>
                          <td>{{$users->last_login}}</td>
                          <td>{{$users->created_at}}</td>
                          <td><a href="">Edit</a></td>
                          <td><a href="">Delete</a></td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>

                  </div>
                </div>
              </div>


              <div class="col-md-6 col-sm-6 col-lg-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>DAFTAR USER PETANI</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama lengkap</th>
                          <th>Alamat Lengkap</th>
                          <th>Umur</th>
                          <th>Tempat Lahir</th>
                          <th>Dibuat</th>
                          <th colspan="2">Aksi</th>
                        </tr>
                      </thead>
                      @foreach($petani as $petanis)
                      <tbody>
                        <tr>
                          <th scope="row">{{$users->id}}</th>
                          <td>{{$petanis->first_name}}</td>
                          <td>{{$petanis->location}}</td>
                          <td>{{$petanis->umur}}</td>
                          <td>{{$petanis->tmp_lahir}}</td>
                          <td>{{$petanis->created_at}}</td>
                          <td><a href="">Edit</a></td>
                          <td><a href="">Delete</a></td>
                        </tr>
                      </tbody>
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