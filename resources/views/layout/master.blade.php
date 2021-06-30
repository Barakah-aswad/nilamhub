<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>@yield('title')</title>

    <!-- <link href="{{URL::asset('admin/vendors/bootstrap3-editable/css/bootstrap-editable.css')}}" rel="stylesheet"> -->
    <!-- Bootstrap -->
    <link href="{{URL::asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{URL::asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{URL::asset('admin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{URL::asset('admin/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <link href="{{URL::asset('admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
    
    <!-- bootstrap-progressbar -->
    <link href="{{URL::asset('admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{URL::asset('admin/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{URL::asset('admin/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{URL::asset('admin/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/" class="site_title"><i class="fa fa-paw"></i> <span>Wolasi Link</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{url('/public/admin/production/images/img.jpg')}}" alt="image" class="img-circle profile_img">
              </div>
              @if(Sentinel::check())
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Sentinel::getUser()->first_name}}</h2>
              </div>
              @else
              <h2>Anda tidak berhak masuk si halaman ini</h2>

              <script>window.location = "{{ route('/login') }}";</script>
                      <?php exit; ?>
             @endif
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @if(Sentinel::getUser()->roles()->first()->slug == 'pengunjung')
                @include('include.sidebar_pengunjung.sidebar_visitor')
            @elseif(Sentinel::getUser()->roles()->first()->slug == 'petani')
                @include('include.sidebar_petani.sidebar_petani')
            @elseif(Sentinel::getUser()->roles()->first()->slug == 'admin')
                @include('include.sidebar_admin.sidebar_admin')
            @endif
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            @include('include.fosidebar')
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
            @include('include.header')
        <!-- /top navigation -->

        <!-- page content -->
            @yield('content')
        <!-- /page content -->

        <!-- footer content -->
            @include('include.footer')
        <!-- /footer content -->
      </div>
    </div>
    <!-- <script src="{{URL::asset('admin/vendors/bootstrap3-editable/js/bootstrap-editable.js')}}"></script>
    <script src="{{URL::asset('admin/vendors/bootstrap3-editable/js/bootstrap-editable.min.js')}}"></script> -->
    <!-- jQuery -->
    <script src="{{URL::asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{URL::asset('admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{URL::asset('admin/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{URL::asset('admin/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{URL::asset('admin/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{URL::asset('admin/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{URL::asset('admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{URL::asset('admin/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{URL::asset('admin/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{URL::asset('admin/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{URL::asset('admin/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{URL::asset('admin/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{URL::asset('admin/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{URL::asset('admin/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{URL::asset('admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{URL::asset('admin/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{URL::asset('admin/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{URL::asset('admin/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{URL::asset('admin/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{URL::asset('admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{URL::asset('admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{URL::asset('admin/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{URL::asset('admin/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{URL::asset('admin/build/js/custom.min.js')}}"></script>
    
  </body>

<script>
    function goBack() {
      window.history.back();
    }

    function goForward() {
      window.history.forward();
    }


    $(document).on('click','create-modal', function() {
        $('#create').modal('show');
        $('#form-horisontal').show();
        $('#modal-title').text('Add Post');
    });

    $('#simpan').click(function() {

        let _token  = $('meta[name="csrf-token"]').attr('content');


        //$(this).html('Sending ...');

        $.ajax({

            type : 'POST',
            url  : '/tambahpenyakit',
            data : {
                   '_token'         : $('input[name=_token]').val(),
                   'jenis_penyakit' : $('input[name=jenis_penyakit]').val(),
                   'ke_tanaman'     : $('input[name=ke_tanaman').val(),
                   'pestisida'      : $('input[name=pestisida]').val(),
                   'penanganan'     : $('input[name=penanganan]').val(),
            },
            success: function(data){
                //consol.log(data)
                 $('#table').append(`
                        <tr>
                          <th scope="row">`+ data.id + `</th>
                          <td>` + data.jenis_penyakit + `</a></td>
                          
                          <td>` + data.pestisida + `</td>
                          <td>` + data.ShortContent +`</td>
                          <td><button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#lihat">
                          </button>

                          <button href="" type="button" class="btn btn-success fa fa-pencil-square-o" data-toggle="modal" data-target="#ubah">
                           </td>
                        </tr>
                            `);
                        }
                    });

                });
</script>
</html>
