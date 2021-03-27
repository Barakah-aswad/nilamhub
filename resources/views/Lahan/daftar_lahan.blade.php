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
                        <h4><i class="fa fa-warning"></i> Perhatian!</h4> Harap untuk menginput data anda yang sebenar-benarnya.<br>
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
                    <h2>Daftar Lahan</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Luas lahan</th>
                          <th>alamat_lahan</th>
                          <th>Nomor setifikat</th>
                          <th>Status lahan</th>
                          <th>Tahun garap</th>
                          <th>Jenis pengaman</th>
                          <th>Jarak lahan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      @foreach($lahan as $lahans)
                      <tbody>
                        <tr>
                          <th scope="row">{{$lahans->id}}</th>
                          <td>{{$lahans->total_luas}} m2</td>
                          <td>{{$lahans->alamat_lahan}}</td>
                          <td>{{$lahans->no_sertifikat}}</td>
                          <td>{{$lahans->status_tanah}}</td>
                          <td>{{$lahans->tahun_garap}}</td>
                          <td>{{$lahans->jenis_pengaman}}</td>
                          <td>{{$lahans->jrk_lahan}} Km</td>
                          <td><a href="/aktifasi/{{$lahans->id}}">DETAIL</a></td>
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