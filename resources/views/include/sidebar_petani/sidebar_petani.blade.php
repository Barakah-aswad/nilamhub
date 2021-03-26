<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

              @if($data == 0 )
              <div class="menu_section">
                <h3>Informasi Umum</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/">Akun blm terverifikasi</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

              @elseif($data == 1)

              <div class="menu_section">
                <h3>Informasi Umum</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/komiditas">Komiditas Unggulan</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Lahan</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-map"></i> Lahan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/registrasi-lahan">Registrasi Lahan</a></li>
                      <li><a href="/komiditas">Daftar lahan</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              @endif
            </div>