{{-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name','ATC')}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .form-style-2{
            max-width: 800px;
            padding: 40px 12px 10px 200px;
            font: 13px Arial, Helvetica, sans-serif;
        }
        .form-style-2-heading{
            font-weight: bold;
            font-style: italic;
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
        .form-style-2 input[type=submit]{
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
        .form-style-2 input[type=submit]:hover{
            background: #EA7B00;
            color: #fff;
        }
        .navbar .navbar-nav h4{
            color: #f5aa42;
        }
        .navbar a{
            font-size: 25px;
            color: green; 
            margin-right: 150px;
        }
        .navbar .btn{
            margin-left: 150px;
        }
        </style>
</head>
<body>
    
        <nav class="navbar navbar-expand-sm bg-info navbar-dark">
            <button class="btn btn-info" onclick="location.href = '/ATC/public/slots'">BACK</button>
            <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <h4><strong>ADD SLOT</strong></h4>
                    </li>
                </ul>
            </div>
            <a href="/ATC/public/messages"><span class="glyphicon glyphicon-envelope"></span></a>
        </nav>
        

    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav active"><a href="#A" data-toggle="tab">Arrival</a></li>
            <li class="nav"><a href="#B" data-toggle="tab">Arrival + Departure</a></li>
            <li class="nav"><a href="#C" data-toggle="tab">Departure</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade in active" id="A">
                <div class="form-style-2">
                    <div class="form-style-2-heading">Allocate Arrival Slot</div>
                    <form action="" method="post">
                      @csrf
                        <div class="form-group row">
                            <label for="example-date-input" class="col-2 col-form-label">Date</label>
                            <div class="col-10">
                              <input class="form-control" type="date" value="" id="example-date-input" name="date">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Airport (S)</label>
                            <div class="col-10">
                              <input class="form-control" type="text" value="" id="example-text-input" name="source">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Flight Number</label>
                            <div class="col-10">
                              <input class="form-control" type="number" value="" id="example-number-input" name="flightnumber">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-time-input" class="col-2 col-form-label">Arrival Time</label>
                            <div class="col-10">
                              <input class="form-control" type="time" value="" id="example-time-input" name="arrivaltime">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Airport (D)</label>
                            <div class="col-10">
                              <input class="form-control" type="text" value="" id="example-text-input" name="destination">
                            </div>
                        </div>
                        @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                        @endif
                        <label><span> </span><input type="submit" value="Submit" /></label>
                    </form>
                    </div>
            </div>
            <div class="tab-pane fade" id="B">
                <div class="form-style-2">
                    <div class="form-style-2-heading">Allocate Arrival And Departure Slot</div>
                    <form action="" method="post">
                      @csrf
                        <div class="form-group row">
                            <label for="example-date-input" class="col-2 col-form-label">Date</label>
                            <div class="col-10">
                              <input class="form-control" type="date" value="" id="example-date-input" name="date">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Airport (S)</label>
                            <div class="col-10">
                              <input class="form-control" type="text" value="" id="example-text-input" name="source">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Flight Number</label>
                            <div class="col-10">
                              <input class="form-control" type="number" value="" id="example-number-input" name="flightnumber">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-time-input" class="col-2 col-form-label">Arrival Time</label>
                            <div class="col-10">
                              <input class="form-control" type="time" value="" id="example-time-input" name="arrivaltime">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-time-input" class="col-2 col-form-label">Departure Time</label>
                            <div class="col-10">
                              <input class="form-control" type="time" value="" id="example-time-input" name="departuretime">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Airport (D)</label>
                            <div class="col-10">
                              <input class="form-control" type="text" value="" id="example-text-input" name="destination">
                            </div>
                        </div>
                        <label><span> </span><input type="submit" value="Submit" /></label>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade" id="C">
                <div class="form-style-2">
                    <div class="form-style-2-heading">Allocate Departure Slot</div>
                    <form action="" method="post">
                      @csrf
                        <div class="form-group row">
                            <label for="example-date-input" class="col-2 col-form-label">Date</label>
                            <div class="col-10">
                              <input class="form-control" type="date" value="" id="example-date-input" name="date">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Airport (S)</label>
                            <div class="col-10">
                              <input class="form-control" type="text" value="" id="example-text-input" name="source">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Flight Number</label>
                            <div class="col-10">
                              <input class="form-control" type="number" value="" id="example-number-input" name="flightnumber">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-time-input" class="col-2 col-form-label">Departure Time</label>
                            <div class="col-10">
                              <input class="form-control" type="time" value="" id="example-time-input" name="departuretime">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Airport (D)</label>
                            <div class="col-10">
                              <input class="form-control" type="text" value="" id="example-text-input" name="destination">
                            </div>
                        </div>
                        <label><span> </span><input type="submit" value="Submit" /></label>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html> --}}

@extends('layouts.app')

@section('content')
<div class="container">
  @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
  @endif
  <ul class="nav nav-tabs">
      <li class="nav active"><a href="#A" data-toggle="tab">Arrival</a></li>
      <li class="nav"><a href="#B" data-toggle="tab">Arrival + Departure</a></li>
      <li class="nav"><a href="#C" data-toggle="tab">Departure</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
      <div class="tab-pane fade in active" id="A">
          <div class="form-style-2" style="margin-top:3%;">
              <div class="form-style-2-heading">Allocate Arrival Slot</div>
              <form action="/ATC/public/slotupdate" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                  <div class="form-group row">
                      <label for="example-date-input" class="col-2 col-form-label">Date</label>
                      <div class="col-10">
                        <input class="form-control" type="date" value="" id="example-date-input" name="date">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">Airport (S)</label>
                      <div class="col-10">
                        <input class="form-control" type="text" value="" id="example-text-input" name="source">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-number-input" class="col-2 col-form-label">Flight Number</label>
                      <div class="col-10">
                        <input class="form-control" type="number" value="" id="example-number-input" name="flightnumber">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-time-input" class="col-2 col-form-label">Arrival Time</label>
                      <div class="col-10">
                        <input class="form-control" type="time" value="" id="example-time-input" name="arrivaltime">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">Airport (D)</label>
                      <div class="col-10">
                        <input class="form-control" type="text" value="" id="example-text-input" name="destination">
                      </div>
                  </div>
                  @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  @endif
                  <label><span> </span><input type="submit" value="Submit" /></label>
              </form>
              </div>
      </div>
      <div class="tab-pane fade" id="B">
          <div class="form-style-2" style="margin-top:3%;">
              <div class="form-style-2-heading">Allocate Arrival And Departure Slot</div>
              <form action="/ATC/public/slotupdate" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                  <div class="form-group row">
                      <label for="example-date-input" class="col-2 col-form-label">Date</label>
                      <div class="col-10">
                        <input class="form-control" type="date" value="" id="example-date-input" name="date">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">Airport (S)</label>
                      <div class="col-10">
                        <input class="form-control" type="text" value="" id="example-text-input" name="source">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-number-input" class="col-2 col-form-label">Flight Number</label>
                      <div class="col-10">
                        <input class="form-control" type="number" value="" id="example-number-input" name="flightnumber">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-time-input" class="col-2 col-form-label">Arrival Time</label>
                      <div class="col-10">
                        <input class="form-control" type="time" value="" id="example-time-input" name="arrivaltime">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-time-input" class="col-2 col-form-label">Departure Time</label>
                      <div class="col-10">
                        <input class="form-control" type="time" value="" id="example-time-input" name="departuretime">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">Airport (D)</label>
                      <div class="col-10">
                        <input class="form-control" type="text" value="" id="example-text-input" name="destination">
                      </div>
                  </div>
                  <label><span> </span><input type="submit" value="Submit" /></label>
              </form>
          </div>
      </div>
      <div class="tab-pane fade" id="C">
          <div class="form-style-2" style="margin-top:3%;">
              <div class="form-style-2-heading">Allocate Departure Slot</div>
              <form action="/ATC/public/slotupdate" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                  <div class="form-group row">
                      <label for="example-date-input" class="col-2 col-form-label">Date</label>
                      <div class="col-10">
                        <input class="form-control" type="date" value="" id="example-date-input" name="date">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">Airport (S)</label>
                      <div class="col-10">
                        <input class="form-control" type="text" value="" id="example-text-input" name="source">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-number-input" class="col-2 col-form-label">Flight Number</label>
                      <div class="col-10">
                        <input class="form-control" type="number" value="" id="example-number-input" name="flightnumber">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-time-input" class="col-2 col-form-label">Departure Time</label>
                      <div class="col-10">
                        <input class="form-control" type="time" value="" id="example-time-input" name="departuretime">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">Airport (D)</label>
                      <div class="col-10">
                        <input class="form-control" type="text" value="" id="example-text-input" name="destination">
                      </div>
                  </div>
                  <label><span> </span><input type="submit" value="Submit" /></label>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection
