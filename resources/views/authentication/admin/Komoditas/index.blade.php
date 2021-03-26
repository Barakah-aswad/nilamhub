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
                          <th>Jenis Kategori</th>
                          <th></th>
                          <th>Status</th>
                          <th>Deskripsi</th>
                          <th>Rating</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row"></th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td><span class="badge badge-success">verifed</span></td>
                          <td></td>
                          <td><a href="">DETAIL</a></td>
                        </tr>
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