<html lang="en">
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
        <button class="btn btn-info" onclick="location.href = '/ATC/public/addslot'">BACK</button>
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <h4><strong>PENDING REQUESTS</strong></h4>
                </li>
            </ul>
        </div>
        <button class="btn btn-info" onclick="location.href = '/ATC/public/slots'">VIEW</button>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="head">Request For Updation</div> 
                <form action="<?php echo action('PostController@store'); ?>" method="POST">
                    <div class="table-responsive">
                        <table id="mytable" class="table table-bordered table-hover">
                            <tr class="danger">
                                <th><input type="checkbox" id="checkall" /></th>
                                <th>Date</th>
                                <th>Airport (S)</th>
                                <th>Airport (D)</th>
                                <th>Flight Number</th>
                                <th>Arrival Time</th>
                                <th>Departure Time</th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <td><input type="checkbox" class="checkthis" /></td>
                                    <td>{{$post['Date']}}</td>
                                    <td>{{$post['Source']}}</td>
                                    <td>{{$post['Destination']}}</td>
                                    <td>{{$post['Flightnumber']}}</td>
                                    <td>{{$post['ArrivalTime']}}</td>
                                    <td>{{$post['DepartureTime']}}</td>
                                </tr>
                            @endforeach
                            
                        </table>
                    </div>
                    <div class="form-group">
                        <label><span> </span><input type="submit" value="Send Request" /></label>
                    </div>
                </form>
                {{-- <button class="btn btn-primary" style="margin-left:40%; margin-top:3%;">Send Request</button> --}}
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
        $("#mytable #checkall").click(function () {
                if ($("#mytable #checkall").is(':checked')) {
                    $("#mytable input[type=checkbox]").each(function () {
                        $(this).prop("checked", true);
                    });

                } else {
                    $("#mytable input[type=checkbox]").each(function () {
                        $(this).prop("checked", false);
                    });
                }
            });
            
            $("[data-toggle=tooltip]").tooltip();
        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>