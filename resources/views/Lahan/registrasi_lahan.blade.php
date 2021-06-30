@extends('layout.master')
	@section('title')
		Registrasi Akun
	@endsection
@section('content')

<div class="right_col" role="main">
	<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Formulir Registrasi Akun</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group row pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
            	<div class="row">
            		<div class="col-md-12">
            			<div class="x_panel">
            				<div class="alert alert-danger">
                        <h4><i class="fa fa-warning"></i> Perhatian!</h4> Harap untuk menginput data diri anda yang sebenar-benarnya, demi kelancaran proses verifikasi dan sebagainya.<br>
                        <a href="" class="alert-link">Apabila anda mengalami kendala klik link berikut untuk bantuan.</a> Memberikan informasi tidak benar akan dikenakan sanksi sesuai aturan hukum yang berlaku.

                      </div>
            			</div>
            		</div>
            	</div>

            <div class="clearfix"></div>


	         <div class="row">
              	<div class="col-md-6 col-sm-12 col-lg-12">
                <div class="x_panel">
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" action="" method="POST">

                    	{{ csrf_field() }}

                    	 <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Total Luas</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          
                          <input type="text" name="total_luas" class="form-control @error('total_luas') is-invalid @enderror" value="{{old('total_luas')}}"  placeholder="Cth: 19000" autofocus>

                            @error('total_luas')
                                    <span class="fa fa-credit-card invalid-feedback left" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Alamat Lahan</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" name="alamat_lahan" class="form-control @error('alamat_lahan') is-invalid @enderror" value="{{old('alamat_lahan')}}" placeholder="Cth: Jln. Budi Utomo" autofocus>

                          @error('alamat_lahan')
                            <span class="fa fa-credit-card invalid-feedback left" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror

                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nomor Sertifikat</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" name="no_sertifikat" class="form-control @error('no_sertifikat') is-invalid @enderror" value="{{old('no_sertifikat')}}" placeholder="Cth: 345">

                          @error('no_sertifikat')
                          <span class="fa fa-home invalid-feedback left" role="alert">
                            {{$message}}
                          </span>
                          @enderror

                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Tahun Garap</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" name="tahun_garap" value="{{old('tahun_garap')}}" class="form-control @error('tahun_garap') is-invalid @enderror" autofocus>

                          @error('tahun_garap')
                            <span class="fa fa-calendar invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror

                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Jenis Pengaman Pagar</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <select id="heard" name="jenis_pengaman" class="form-control" required>
                          <option value="">Jenis Pagar</option>
                          <option value="Tidak di pagar">Tidak di pagar</option>
                          <option value="Kawat duri">Pagar Kawat duri</option>
                          <option value="Pagar alam">Pagar alam</option>
                          <option value="Pagar listrik">Pagar listrik</option>
                        </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Status Tanah</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <select id="heard" name="status_tanah" class="form-control" required>
													<option value="">Status Tanah</option>
													<option value="milik sendiri">Milik Sendiri</option>
													<option value="sewa">Sewa</option>
													<option value="izin pakai">Izin Pakai</option>
												</select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Perkiraan Jarak Lahan</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" name="jrk_lahan" value="{{old('jrk_lahan')}}" class="form-control @error('jrk_lahan') is-invalid @enderror" autofocus>

                          @error('jrk_lahan')
                          <span class="fa fa-calendar invalid-feedback left" role="alert">
                            {{$message}}
                          </span>
                          @enderror

                        </div>
                      </div>
                      <div class="ln_solid"></div>

                      <div class="form-group row">
                        <div class="col-md-9 col-xl-12 offset-md-3">
                          <button type="submit" class="btn btn-success">Daftar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
        	</div>
    </div>
</div>
@endsection
@section('footer')
@endsection