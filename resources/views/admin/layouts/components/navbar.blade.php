<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Nega Branca</a>
        </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              @if(Auth::check())
                <li><a href="{{ route('dashboard')}}">Dashboard</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Profile <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li role="presentation">
                      <a href='{{route('profile_edit') }}'><b class='glyphicon glyphicon-pencil'></b> Editar</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><b class="glyphicon glyphicon-off"></b>
                       Logout</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> 
                        {{ csrf_field() }} </form>
                    </li>
                  </ul>
                </li><!-- Fim do dropdown -->
              @endif
                <li><a href='{{ route("home")}}' target="_blank">Meu site</a>
                <li><a href="{{ route('about')}}">About</a></li>
            </ul>
          </div>

      </div>
    </nav>
