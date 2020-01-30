<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    
    {{-- <style>
        .dropbtn {
          background-color: transparent;
          color: white;
          padding: 16px;
          font-size: 16px;
          border: none;
          cursor: pointer;
        }
        
        .dropdown {
          position: relative;
          display: inline-block;
        }
        
        .dropdown-content {
          /* display: none; */
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }
        
        .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
        }
        
        .dropdown-content a:hover {background-color: transparent}
        
        /* .dropdown:hover .dropdown-content {
          display: block;
        } */
        
        .dropdown:hover .dropbtn {
          background-color: transparent;
        }
    </style> --}}
    <style type="text/css">
        .form-style-2{
            max-width: 500px;
            padding: 20px 12px 10px 20px;
            font: 13px Arial, Helvetica, sans-serif;
            margin-left: 25%;
            margin-top: 7%;
            /* margin-bottom: auto; */
        }
        .form-style-2-heading{
            font-weight: bold;
            border-bottom: 2px solid #ddd;
            margin-bottom: 20px;
            font-size: 15px;
            padding-bottom: 3px;
        }
        .form-style-2 label{
            display: block;
            margin: 0px 0px 15px 0px;
        }
        .form-style-2 label > span{
            width: 100px;
            font-weight: bold;
            float: left;
            padding-top: 8px;
            padding-right: 5px;
        }
        .form-style-2 span.required{
            color:red;
        }
        .form-style-2 .tel-number-field{
            width: 40px;
            text-align: center;
        }
        .form-style-2 input.input-field, .form-style-2 .select-field{
            width: 48%;	
        }
        .form-style-2 input.input-field, 
        .form-style-2 .tel-number-field, 
        .form-style-2 .textarea-field, 
         .form-style-2 .select-field{
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            border: 1px solid #C2C2C2;
            box-shadow: 1px 1px 4px #EBEBEB;
            -moz-box-shadow: 1px 1px 4px #EBEBEB;
            -webkit-box-shadow: 1px 1px 4px #EBEBEB;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            padding: 7px;
            outline: none;
        }
        .form-style-2 .input-field:focus, 
        .form-style-2 .tel-number-field:focus, 
        .form-style-2 .textarea-field:focus,  
        .form-style-2 .select-field:focus{
            border: 1px solid #0C0;
        }
        .form-style-2 .textarea-field{
            height:100px;
            width: 55%;
        }
        .form-style-2 input[type=submit],
        .form-style-2 input[type=button]{
            border: none;
            padding: 8px 15px 8px 15px;
            background: #FF8500;
            color: #fff;
            box-shadow: 1px 1px 4px #DADADA;
            -moz-box-shadow: 1px 1px 4px #DADADA;
            -webkit-box-shadow: 1px 1px 4px #DADADA;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
        }
        .form-style-2 input[type=submit]:hover,
        .form-style-2 input[type=button]:hover{
            background: #EA7B00;
            color: #fff;
        }
        .flight{
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/c/c3/Airbus_A350-941_banner.jpg');
            /* width: 172px; */
            height: 172px;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            margin-bottom: 3%;
        }
        .flight h1{
            color: gold;
            margin-left:20px;
            padding-top:20px;
        }
        .profile {
        margin: 20px 0;
        }

        /* Profile sidebar */
        .profile-sidebar {
        padding: 20px 0 10px 0;
        background: #fff;
        }

        .profile-userpic img {
        float: none;
        margin: 0 auto;
        width: 20%;
        height: 20%;
        -webkit-border-radius: 50% !important;
        -moz-border-radius: 50% !important;
        border-radius: 50% !important;
        }

        .profile-usertitle {
        text-align: center;
        margin-top: 20px;
        }

        .profile-usertitle-name {
        color: #5a7391;
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 7px;
        text-transform: uppercase;
        }

        .profile-usertitle-email {
        color: #5b9bd1;
        font-size: 12px;
        font-weight: 600;
        margin-bottom: 15px;
        }

        .profile-userbuttons {
        text-align: center;
        margin-top: 10px;
        }

        .profile-userbuttons .btn {
        text-transform: uppercase;
        font-size: 11px;
        font-weight: 600;
        padding: 7px 18px;
        margin-right: 5px;
        }

        .profile-userbuttons .btn:last-child {
        margin-right: 0px;
        }

        .atc-dash {
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/a/a8/Flying_banner.jpg');
            /* width: 172px; */
            height: 172px;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            margin-bottom: 3%;
        }

        .atc-dash h1{
            color: gold;
            margin-left:20px;
            padding-top:40px;
        }
        .airport{
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/0/0f/Directions_airport_banner.jpg');
            /* width: 172px; */
            height: 172px;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            margin-bottom: 3%;
        }
        .airport h1{
            color: #c3e6e4;
            margin-left:20px;
            padding-top:60px;
            font-size: 40px;
        }
        .arrive{
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Arrival_blurred_faces_banner.jpg/2560px-Arrival_blurred_faces_banner.jpg');
            /* width: 172px; */
            height: 172px;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            margin-bottom: 3%;
        }
        .arrive h1{
            color: #b52b2b;
            margin-left:20px;
            padding-top:20px;
        }
        .plane{
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/4/47/Jetstar_787_JQ35_in_flight_banner.jpg');
            /* width: 172px; */
            height: 172px;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            margin-bottom: 3%;
        }
        .plane h1{
            color: #2b59b5;
            margin-left:20px;
            padding-top:30px;
        }
        </style>
</head>
<body>
    

    
    @if (!Auth::check())
        @include('inc.navbar')
    @elseif (Auth::check() && Auth::user()->Role == 1)
        {{-- //show logged in navbar --}}
        @include('inc.admin_nav')
    @elseif (Auth::check() && Auth::user()->Role == 2)
        {{-- //show logged out navbar --}}
        @include('inc.atc_nav')
    @elseif (Auth::check() && Auth::user()->Role == 3)
        @include('inc.user_nav')
    @endif
    {{-- <div class="container"> --}}
        <main class="py-4">
            @yield('content')
        </main>
        {{-- <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> --}}
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        {{-- <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script> --}}
    {{-- </div> --}}
</body>
</html>
