<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Informasi Umum</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      @if($data == 0)
                      <li><a href="/">Akun blm terverifikasi</a></li>
                      @else($data == 0)
                      <li><a href="/komiditas">Komiditas Unggulan</a></li>
                      @endif
                    </ul>
                  </li>
                </ul>
              </div>

            </div>