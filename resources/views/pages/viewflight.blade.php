{{-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name','ATC')}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .navbar .navbar-nav h4{
            color: #f5aa42;
        }
        .navbar a{
            font-size: 25px;
            color: lightskyblue; 
            margin-right: 150px;
        }
        .navbar .btn{
            margin-left: 150px;
            margin-right: 150px;
        }
        .row input[type=submit]{
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
        .row input[type=submit]:hover{
            background: #EA7B00;
            color: #fff;
        }
        .row .head{
            font-weight: bold;
            border-bottom: 2px solid #ddd;
            margin-bottom: 20px;
            font-size: 20px;
            padding-bottom: 3px;
        }
        </style>
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-info navbar-dark">
        <button class="btn btn-info" onclick="location.href = '/ATC/public/airport'">BACK</button>
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <div style="margin-right:150px;"><h4><strong>VIEW SLOTS</strong></h4></div>
                </li>
            </ul>
        </div>
        <a href="/ATC/public/addslot"><i class="fas fa-plus-circle"></i></a>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="head">Slots Allocated</div> 
                    <div class="table-responsive">
                        <table id="mytable" class="table table-bordered table-hover">
                            <tr class="danger"><th>AIRPORT NAME</th>
                                    <th>FLIGHT NUMBER</th>
                                    <th>SOURCE</th>
                                    <th>DESTINATION</th>
                                    <th>DEPARTURE SLOT</th>
                                    <th>ARRIVAL SLOT</th>
                                    <th>DATE</th>
                            </tr>
                            @foreach ($slots as $slot)
                                <tr>
                                    <td>{{$slot->Airport}}</td>
                                    <td>{{$slot->Flightnumber}}</td>
                                    <td>{{$slot->Source}}</td>
                                    <td>{{$slot->Destination}}</td>
                                    <td>{{$slot->DepartureTime}}</td>
                                    <td>{{$slot->ArrivalTime}}</td>
                                    <td>{{$slot->Date}}</td>
                                </tr>
                            @endforeach  
                        </table>
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
        <div class="row">
            <div class="col-md-12">
                <div class="head">Flight Schedule</div>
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordered table-hover">
                        <tr class="danger">
                            {{-- <th>AIRPORT NAME</th> --}}
                            <th>FLIGHT NUMBER</th>
                            <th>SOURCE</th>
                            <th>DESTINATION</th>
                            <th>DEPARTURE TIME</th>
                            <th>ARRIVAL TIME</th>
                            <th>DATE</th>
                            <th>PREDICTION</th>
                        </tr>
                        @foreach ($slots as $slot)
                        <tr>
                                {{-- <td id="{{'a'.$loop->iteration}}">{{$slot->Airport}}</td> --}}
                                <td id="{{'a'.$loop->iteration}}">{{$slot->Flightnumber}}</td>
                                <td id="{{'src'.$loop->iteration}}">{{$slot->Source}}</td>
                                <td id="{{'dest'.$loop->iteration}}">{{$slot->Destination}}</td>
                                <td id="{{'dept'.$loop->iteration}}">{{$slot->DepartureTime}}</td>
                                <td id="{{'a'.$loop->iteration}}">{{$slot->ArrivalTime}}</td>
                                <td id="{{'date'.$loop->iteration}}">{{$slot->Date}}</td>
                                <td><button id="{{'b'.$loop->iteration}}" class="btn btn-success">Predict Delay</button></td>
                            </tr>
                        @endforeach  
                    </table>
                    <a href="{{URL::previous()}}" class="btn btn-danger" style="float: right;">Back</a>
                </div> 
            </div>
        </div>
    </div>
    <script>
        // function parseDate(str) {
        //     document.getElementById('date') = 
        // }
        // combineDateAndTime = function(date, time) {
        //     timeString = time.getHours() + ':' + time.getMinutes() + ':00';

        //     var year = date.getFullYear();
        //     var month = date.getMonth() + 1; // Jan is 0, dec is 11
        //     var day = date.getDate();
        //     var dateString = '' + day + '/' + month + '/' + year;
        //     var combined = new Date(dateString + ' ' + timeString);

        //     return combined;
        // };
        function format(inputDate,inputTime) {
            var date = new Date(inputDate);
            var time = new Date(inputTime);
            if (!isNaN(date.getTime())) {
                // Months use 0 index.
                return date.getDate() + 1 + '/' + date.getMonth() + '/' + date.getFullYear() + ' ' + inputTime + ':00';
            }
        }
        $(document).ready(function(){
            @foreach($slots as $slot)
                $('#b{{$loop->iteration}}').on("click",function(){
                    // var jsonText = JSON.stringify({ dept_date_time:'1/10/2018 21:45:00',origin:'JFK',destination:'ATL' });
                    // alert($('#date{{"$loop->iteration"}}').html())
                    // alert(combineDateAndTime('11/12/2019','21:10:00'))
                    // alert(format('2010-01-18','22:10'))
                    var jsonText = JSON.stringify({ dept_date_time:format($('#date{{"$loop->iteration"}}').html(),$('#dept{{"$loop->iteration"}}').html()),origin:$('#src{{"$loop->iteration"}}').html(),destination:$('#dest{{"$loop->iteration"}}').html() });
                    $.ajax({
                        url:'http://localhost:5000/api',
                        // data:{ "_token": "{{ csrf_token() }}",'src':$('#src{{"$loop->iteration"}}').html(),'dest':$('#dest{{"$loop->iteration"}}').html(),'dept':$('#dept{{"$loop->iteration"}}').html(),'date':$('#date{{"$loop->iteration"}}').html(),},
                        // data:{"_token": "{{ csrf_token() }}","dept_date_time":'1/10/2018 21:45:00',"origin":"JFK","destination":"ATL"},
                        data:jsonText,
                        method:"POST",
                        success:function(result){
                            if(result>0.8)
                            {
                                var prediction = 'Scheduled On Time';
                            } else {
                                var prediction = 'Scheduled Delay';
                            }
                            alert(prediction);
                        },
                        error:function(){
                            alert("error");
                        },
                    }); 
                });
                @endforeach
                $.ajaxSetup({
                    headers : {
                    'X-CSRF-TOKEN' : "{{ csrf_token() }}",
                }
            });
        });
    </script>
@endsection