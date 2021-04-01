@extends('layout.master')
	@section('title')
		Registrasi Akun
	@endsection
@section('content')

<div class="right_col" role="main">
	<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Profil</h3>
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
                    <form class="form-horizontal form-label-left" action="/profil" method="POST">

                    	{{ csrf_field()}}

                      <!-- Nomor KK -->
                    	<div class="form-group row">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Nomor Kartu Keluarga</label>
                          <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" name="nomor_kk" class="form-control @error('nomor_kk') is-invalid @enderror" value="{{old('nomor_kk')}}"  placeholder="Cth: 7405xxxx" autofocus>

                              @error('nomor_kk')
                                      <span class="fa fa-credit-card invalid-feedback left" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                              @enderror
                          </div>
                      </div>
                      <!-- Nomor KTP -->
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nomor Identitas KTP</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" name="nomor_ktp" class="form-control @error('nomor_ktp') is-invalid @enderror" value="{{old('nomor_ktp')}}" placeholder="Cth: 7405xxxx" autofocus>

                          @error('nomor_ktp')
                            <span class="fa fa-credit-card invalid-feedback left" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror

                        </div>
                      </div>
                      <!-- Alamat Lengkap -->
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Alamat Lengkap</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" name="alamat_provinsi" class="form-control @error('alamat_provinsi') is-invalid @enderror" value="{{old('alamat_provinsi')}}" placeholder="Cth: Desa:xxxx, Kec.xxx"><br>

                          <input type="text" name="alamat_lengkap" class="form-control @error('alamat_lengkap') is-invalid @enderror" value="{{old('alamat_lengkap')}}" placeholder="Cth: Desa:xxxx, Kec.xxx">

                          @error('nama_provinsi')
                          <span class="fa fa-home invalid-feedback left" role="alert">
                            {{$message}}
                          </span>
                          @enderror

                          @error('alamat_lengkap')
                          <span class="fa fa-home invalid-feedback left" role="alert">
                            {{$message}}
                          </span>
                          @enderror

                        </div>
                      </div>
                      <!-- Nomor Telepon -->
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nomor Telepon</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" name="no_telepon" value="{{old('no_telepon')}}" class="form-control @error('no_telepon') is-invalid @enderror" autofocus>

                          @error('no_telepon')
                            <span class="fa fa-calendar invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror

                        </div>
                      </div>
                      <!-- Pekerjaan -->
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Pekerjaan</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" name="pekerjaan" value="{{old('pekerjaan')}}" class="form-control @error('pekerjaan') is-invalid @enderror" autofocus>

                          @error('pekerjaan')
                            <span class="fa fa-calendar invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror

                        </div>
                      </div>
                      <!-- Umur -->
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Umur</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" name="umur" value="{{old('umur')}}" class="form-control @error('umur') is-invalid @enderror" autofocus>

                          @error('umur')
                            <span class="fa fa-calendar invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror

                        </div>
                      </div>
                      <!-- Jenis Kelamin -->
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Jenis Kelamin</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <select id="heard" name="jenis_kelamin" class="form-control" required>
                          <option value="">Jenis Kelamin</option>
                          <option value="laki-laki">Laki - Laki</option>
                          <option value="perempuan">Perempuan</option>
                        </select>
                        </div>
                      </div>
                      <!-- Jml_Anggota_keluarga -->
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Jml Anggota keluarga</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" name="jml_angg_klg" value="{{old('jml_angg_klg')}}" class="form-control @error('jml_angg_klg') is-invalid @enderror" autofocus>

                          @error('jml_angg_klg')
                           <span class="fa fa-user invalid-feedback left" role="alert">
                              <strong>{{$message }}</strong>
                            </span>
                          @enderror

                        </div>
                      </div>
                      <!-- Agama -->
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Agama</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <select id="heard" name="agama" class="form-control" required>
													<option value="">Pilih Agama</option>
													<option value="Islam">Islam</option>
													<option value="Kristen">Kristen</option>
													<option value="Budha">Budha</option>
													<option value="Khatolik">Khatolik</option>
													<option value="Hindu">Hindu</option>
												</select>
                        </div>
                      </div>
                      <!-- Tempat Lahir -->
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Tempat Lahir</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" name="tmp_lahir" value="{{old('tmp_lahir')}}" class="form-control @error('tmp_lahir') is-invalid @enderror" autofocus>

                          @error('tmp_lahir')
                          <span class="fa fa-calendar invalid-feedback left" role="alert">
                            {{$message}}
                          </span>
                          @enderror

                        </div>
                      </div>
                      <!-- Tanggal Lahri -->
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Tanggal lahir</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="date" name="tgl_lahir" value="{{old('tgl_lahir')}}" class="form-control @error('tgl_lahir') is-invalid @enderror" autofocus>

                          @error('tgl_lahir')
                            <span class="fa fa-calendar invalid-feedback left" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <!-- Button Submit -->
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