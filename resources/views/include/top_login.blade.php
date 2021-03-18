
	 <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            @if(Sentinel::check())
              <li role="presentation">
                <form action="/logout" method="POST" id="logout-form">
                  {{ csrf_field() }}
                  <a class="btn btn-danger" href="#" onclick="document.getElementById('logout-form').submit()">Logout</a>
                </form>
              </li>
            @else
                  @if(Sentinel::check())
                    <li role="presentation" class="active"><a href="#">Home</a></li>
                    
                  @else
                    <li role="presentation"><a href="{{url('/register')}}">Register</a></li>
                    <li role="presentation" class="active"><a href="#">Home</a></li>
                  @endif
            @endif
          </ul>
        </nav>
        @if(Sentinel::check())
        <h3>Hallo, <b>{{ Sentinel::getUser()->first_name }}</b></h3>
        @else
        <h3 class="text-muted">Wolasi#Link</h3>
        @endif
      </div>
