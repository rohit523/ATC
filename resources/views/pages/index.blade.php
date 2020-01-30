<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','ATC')}}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Quicksand:400,600&display=swap" rel="stylesheet">
    </head>
    <style>
        body{
            position: relative;
        }
        .mynav{
            background-image: url('https://images.unsplash.com/photo-1506012787146-f92b2d7d6d96?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1049&q=80');
            background-size:cover;
            height:700px;
        }
    
        .navbar{
            background-color: transparent !important;
        }
        .navbar .navbar-brand{
            color : white !important;
            font-weight: bolder;
            font-size: 3em;
        }
        .navbar .navbar-nav{
            margin : 0 auto;
        }
        .navbar .nav-item a{
            color: #00000 !important;
            font-size: 20px;
            margin-left: 20px;
        }
        .login-btn{
            color: black;
            padding: 10px 0px 0px 10px;    
        }
        #section1 {padding-top:50px;height:600px;color: #fff; background-color: #1E88E5;}
        #section2 {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}
        #section3 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}
        /*services css */
        

        .card {
        box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        transition: all 0.2s ease-in-out;
        box-sizing: border-box;
        margin-top:10px;
        margin-bottom:10px;
        background-color:#FFF;
        width: 100%;
        margin-left: 20%;
        /* margin-right: 40px; */
        /* padding: 10px; */
        }

        .card:hover {
        box-shadow: 0 5px 5px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        }

        .card img{
        width:100%;
        height: 30%;
        }
        .card-title,.card-text{
            color:black;
        }
		#mainNavbar {
		    font-weight: 100;    
		}
		#mainNavbar .nav-link:hover {
		    color: purple;
		}
        #mainNavbar .nav-link{
            font-size: 18px;
            background: transparent;
            color: white;
        }
		.para{
			font-family: 'Quicksand';
			color: white;
		}
		.follow{
			font-size: 3.5rem;
			padding-right: 14rem;
			padding-bottom: 2rem;
		}
		hr {
		    border: 0;
		    height: 1px;
		    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
		}
		h4 {
			color: #e3d03d;
		}
		.jumbotron{
			background-color: #7a7676;
		}
        .welcome {
            text-align:center;
            margin-top: 200px;
            color:azure;
            font-size: 20rem;
        }
        .about {
            text-align:center;
            color:azure;
            font-size: 3.5rem;
            margin-bottom: 40px;
        }
        .paragraph{
            color:azure;
            font-size: 2rem;
            margin-top: 25px;
            margin-left:50px;
            margin-right:50px;
        }
        .contact{
			font-size: 7rem;
            margin-top: 20px;
			margin-left: 25rem;
			margin-bottom: 2rem;
		}
    </style>
    <script>
    $(document).ready(function(){
    // Add scrollspy to <body>
    $('body').scrollspy({target: ".mynav", offset: 50});   

    // Add smooth scrolling on all links inside the navbar
    $("#navbarSupportedContent a").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 'slow',function(){
    
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
        }  // End if
    });
    });
    </script>
    <body>
        <div class="mynav">
            <nav id = "mainNavbar" class="navbar navbar-expand-lg navbar-dark bg-info">
                <a class="navbar-brand" href=""><i class="fas fa-plane-departure"></i> ATC</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
          
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href=""><i class="fas fa-home"></i> Home </a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="#section1"><i class="fas fa-address-card"></i> About </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#section2"><i class="fab fa-servicestack"></i> Services </a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="#section3"><i class="fas fa-phone"></i> Contact </a>
                    </li>
                  </ul>
                  <div class="form-inline my-2 my-lg-0">
                      <ul class="navbar-nav mr-auto">
                          {{-- <li class="nav item active">
                              <a class="nav-link" href="#"><i class="fas fa-user"></i> Login </a>
                          </li>
                          <li class="nav item active">
                              <a class="nav-link" href="#"><i class="fas fa-user-plus"></i> Register</a>
                          </li> --}}
                        @if (Auth::guest())
                            {{-- <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle nav-link " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: 5px solid transparent; margin-top:0.5px;"><i class="fas fa-user"></i> Login</a>    
                                <div class="dropdown-menu dropdown-primary" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Admin</a>
                                <a class="dropdown-item" href="{{ route('login') }}">ATC</a>
                                <a class="dropdown-item" href="#">User</a>
                                </div>
                            </div> --}}
                            <li class="nav item active"><a class="nav-link" href="{{ route('login') }}"><i class="fas fa-user"></i> Login</a></li>
                            <li class="nav item active"><a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="/lsapp/public/dashboard" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <strong>{{ Auth::user()->name }}</strong> <span class="caret"></span>
                                </a>

                                <?php
                                // var $h;

                                if(Auth::user()->Role == 1){
                                    $h = 'admin';
                                }
                                elseif(Auth::user()->Role == 2){
                                    $h = 'atc';
                                }
                                else{
                                    $h = 'home';
                                }
                                ?>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/ATC/public/{{ $h }}"><i class="fas fa-chart-line"></i> Dashboard</a></li>
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
              <h1 class="welcome">Welcome</h1>
            </div>
            <div id="section1" class="container-fluid">
                <h1 class="about">About Us</h1>
                <p class="paragraph">The Air Traffic Control (ATC) is a powerful system that allows users to access coordinator’s databases for airports around the world.
                    ATC provides real-time airport slot availability displays, and ATC users can view and download the latest schedule information.
                    Authorised users can make online requests to add, change and delete slots and get immediate responses, including automatic offers, and the ability to coordinate slots at multiple airports at the same time.</p>
                <p class="paragraph">Our primary concern is to manage the flow of aircraft into and out of the airport airspace.
                     We ensure that airlines use their slots as allocated without penalising airlines for unforseen 'On the day' operational factors.
                    We are looking at enhancing the proccess for allocating the slots to airlines wishing to get access to congested airports while maintaining transparent and clear rules for all.</p>
                <p class="paragraph">We predict the flight delays and accordingly reschedule the flights.</p><br>
                <p class="paragraph" style="text-align:center; font-size:30px;">"Our Mission Is To Represent, Lead And Serve The Airline Industry"</p>

            </div>
            <div id="section2" class="container-fluid">

                <h1 class="about">Services</h1>
                
                <div class="row">
                <div class="col-sm-3">
                    <div class="card" style="width: 15rem; height: 18rem;">
                        <img class="card-img-top" src="https://e-airportslots.aero/flight-slot-portal-webui/image/calendar.png?v=1.4.26" alt="Card image cap" style="height: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title">View Slots</h5>
                            <p class="card-text">View real-time airport runway slot availability.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 15rem; height: 18rem;">
                        <img class="card-img-top" src="https://e-airportslots.aero/flight-slot-portal-webui/image/plane.png?v=1.4.26" alt="Card image cap" style="height: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title">Predict Flight Delays</h5>
                            <p class="card-text">Prdict flight delays before arrival</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 15rem; height: 18rem;">
                        <img class="card-img-top" src="https://e-airportslots.aero/flight-slot-portal-webui/image/edit.png?v=1.4.26" alt="Card image cap" style="height: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title">Update Slots</h5>
                            <p class="card-text">Add, change or delete flights online with immediate responses.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 15rem; height: 18rem;">
                        <img class="card-img-top" src="https://e-airportslots.aero/flight-slot-portal-webui/image/history.png?v=1.4.26" alt="Card image cap" style="height: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title">IATA Rules</h5>
                            <p class="card-text">View and download IATA rules</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


            <div id="section3" class="container-fluid">
                <h1 class="about">Contact Us</h1>
                <a href="" class="contact"><i class="fab fa-facebook-square"></i></a>
                <a href="" class="contact"><i class="fab fa-twitter-square"></i></a>
                <a href="" class="contact"><i class="fab fa-linkedin"></i></a>
                <a href="" class="contact"><i class="fab fa-instagram"></i></a>
            </div>

            
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        
    </body>
</html>
