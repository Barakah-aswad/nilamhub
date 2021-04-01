@extends('layout.master')
@section('title')
  Profil
@endsection
@section('content')
       <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>User Profile</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User Report <small>Activity report</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3  profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="images/picture.jpg" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>{{$user->first_name}}</h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-birthday-cake user-profile-icon"></i> {{$user->profil->tmp_lahir}}, {{$user->profil->tgl_lahir}}
                        </li>

                        <li><i class="fa fa-map-marker user-profile-icon"></i> {{$user->profil->alamat_lengkap}}, {{$user->profil->alamat_provinsi}}, Indonesia
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> {{$user->profil->pekerjaan}}
                        </li>

                        <li>
                          <i class="fa fa-male user-profile-icon"></i> {{$user->profil->jenis_kelamin}}
                        </li>

                        <li>
                          <i class="fa fa-phone user-profile-icon"></i> {{$user->profil->no_telepon}}
                        </li>

                        <li>
                          <i class="fa fa-moon-o user-profile-icon"></i> {{$user->profil->agama}}
                        </li>


                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="http://www.kimlabs.com/profile/" target="_blank">www.patani.com</a>
                        </li>
                      </ul>

                      <a class="btn btn-success" href="/profil/{{$user->id}}/edit"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                      <br />

                      <!-- start skills -->
                     
                      <!-- end of skills -->

                    </div>
                    <div class="col-md-9 col-sm-9 ">

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Recent Activity</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Projects Worked on</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane active " id="tab_content1" aria-labelledby="home-tab">
                            <!-- Tab 1 -->
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <!-- Tab 2 -->
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            <!-- Tab 3 -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
@section('footer')
@endsection