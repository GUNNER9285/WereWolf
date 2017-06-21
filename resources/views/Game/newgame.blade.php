<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class = "container">
    {{ Form::open(['url' => '/selectcard']) }}
        {{ Form::label('name', 'Play Name')}}
        {{ Form::text('name') }}
        <br>
        {{ Form::label('Player')}}
        {{ Form::select('player', ['5' => '5', '6' => '6','7' => '7', '8' => '8',
                                    '9' => '9', '10' => '10','11' => '11', '12' => '12',
                                    '13' => '13', '14' => '14','15' => '15', '16' => '16',
                                    '17' => '17', '18' => '18','19' => '19', '20' => '20',
        ])}}

        <br>
        {{Form::submit('PlayGame')}}
    {{ Form::close() }}
</div>
</body>
</html>

