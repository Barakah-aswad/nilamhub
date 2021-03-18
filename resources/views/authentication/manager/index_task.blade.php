@extends('layout.master')

  @section('title')
        Genset history
  @endsection

  @section('content')
<div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
              <h3>Hi..! <b>{{Sentinel::getUser()->first_name}}</b>, Selamat Datang di Mini Database.</h3>
              <br>
              <strong style="color: red">Saat ini anda sebagai pengunjung</strong>
        </div>
        </div>
  @endsection
  @section('footer')
  @endsection