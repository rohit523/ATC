<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
  
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
  
            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fas fa-plane-departure"></i> {{ config('app.name', 'Laravel') }}
            </a>
        </div>
  
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>
  
            <ul class="nav navbar-nav">
              <li><a href="/ATC/public/atcairport">Airport</a></li>
              <li><a href="/ATC/public/iata">IATA</a></li>
              <li><a href="/ATC/public/addslot"><i class="fas fa-plus-circle"></i></a></li>
              {{-- <li><a href="/services">Services</a></li>
              <li><a href="/posts">Contact</a></li> --}}
            </ul>
  
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}"><i class="fas fa-user"></i> Login</a></li>
                    {{-- <li>
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle nav-link " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: 1px solid transparent;"><i class="fas fa-user"></i> Login</a>    
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Admin</a>
                            <a class="dropdown-item" href="{{ route('login') }}">ATC</a>
                            <a class="dropdown-item" href="#">User</a>
                            </div>
                        </div>
                    </li> --}}
                    {{-- <li>
                        <div class="dropdown">
                            <button class="dropbtn">Dropdown</button>
                            <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                            </div>
                        </div>
                    </li> --}}
                    <li><a href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="/lsapp/public/dashboard" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="fas fa-user-circle"></i> {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
  
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/ATC/public/atc"><i class="fas fa-chart-line"></i> Dashboard</a></li>
                            <li><a href="/ATC/public/profile/{{ Auth::user()->name }}"><i class="fas fa-user"></i> View Profile</a><li>
                            <li><a href="/ATC/public/edit/profile"><i class="fas fa-edit"></i> Edit Details</a><li>
                            <li><a href="/ATC/public/edit/password/profile"><i class="fas fa-key"></i> Change Password</a><li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
  
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
  </nav>