@extends('layout.master')
@section('title')
  verifikasi akun
@endsection            
@section('content')
  
  <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Portofolio<small>{{$verifikasi->first_name}}</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <section class="content invoice">
                      <!-- title row -->
                      <div class="row">
                        <div class="  invoice-header">
                          <h1>
                                          <i class="fa fa-file-pdf-o"></i> Portofolio.
                                          <small class="pull-right">{{$verifikasi->Aktivasi_akun->created_at}}</small>
                                      </h1>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                          Kepada Yth :
                          <address>
                                          <strong>PT. Patani Index</strong>
                                          <br>Lr. Pasar, Desa Aoma
                                          <br>Kec. Wolasi, WLS 94107
                                          <br>Phone: 1 (804) 123-9876
                                          <br>Email: patanindex.com
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          Atas nama pemilik akun :
                          <address>
                                          <strong>{{$verifikasi->first_name}}</strong>
                                          <br>Alamat, {{$verifikasi->profil->alamat_lengkap}}
                                          <br>Provinsi: {{$verifikasi->profil->wilayah}}
                                          <br>Nomor Telepon: {{$verifikasi->profil->no_telepon}}
                                          <br>Email: <strong style="color: blue">{{$verifikasi->email}}</strong>
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          <b>Nomor Aktifasi #{{$verifikasi->id}}</b>
                          <br>
                          <b>ID User:</b> {{$verifikasi->Aktivasi_akun->user_id}}
                          <br>
                          <b>Waktu Buat:</b> {{$verifikasi->Aktivasi_akun->created_at}}
                          <br>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                      <div class="row">
                        <div>
                          <div class="x_content">
                            <strong style="color: black">
                            Dengan benar bahwa pemilik saya sebagai pemilik akun atas nama {{$verifikasi->first_name}}, ID {{$verifikasi->id}}, telah melakukan pendaftaran sejak {{$verifikasi->created_at}}, maka dengan ini saya menyetujui atas aturan dan ketetapan yang berlaku serta dapat bertanggung jawab di kemudian hari sesuai ketentuan danperaturan hukum yang berlaku.<br>
                          </strong>
                          </div>
                          
                        </div>
                      </div>
                      <!-- Table row -->
                      <div class="row">
                      </div>
                      <!-- /.row -->

                      <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-md-6">
                          <p class="lead">Payment Methods:</p>
                          <img src="images/visa.png" alt="Visa">
                          <img src="images/mastercard.png" alt="Mastercard">
                          <img src="images/american-express.png" alt="American Express">
                          <img src="images/paypal.png" alt="Paypal">
                          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                          </p>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                          <p class="lead">Amount Due 2/22/2014</p>
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%">Subtotal:</th>
                                  <td>$250.30</td>
                                </tr>
                                <tr>
                                  <th>Tax (9.3%)</th>
                                  <td>$10.34</td>
                                </tr>
                                <tr>
                                  <th>Shipping:</th>
                                  <td>$5.80</td>
                                </tr>
                                <tr>
                                  <th>Total:</th>
                                  <td>$265.24</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class=" ">
                          <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>

                          @if($verifikasi->verifed == 1)
                          
                          @elseif($verifikasi->verifed == 0)
                          <form action="/aktifasi/{{$verifikasi->Aktivasi_akun->id}}" method="POST" id="update-form">

                            
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}

                            <a class="btn btn-success pull-right" style="margin-right: 5px;" href="#"  onclick="document.getElementById('update-form').submit()"><i class="fa fa-thumbs-o-up"></i> Verifikasi</a>

                            <a class="btn btn-warning pull-right" style="margin-right: 5px;" href="#"  onclick="document.getElementById('update-form').submit()"><i class="fa fa-thumbs-o-down"></i> Koreksi</a>
                          </form>
                          @endif
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
@section('footer')
@endsection