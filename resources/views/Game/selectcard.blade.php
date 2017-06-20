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
    <h1> Select Card for {{$game->name}} </h1>
    {{ Form::open(['url' => '/selectcard']) }}
    @for($i=0; $i<$game->player; ++$i)
            {{ Form::label('Select Card')}}
            <select name="card{{$i}}">
                @foreach($cards as $card)
                    <option value="{{$card->id}}">{{$card->name}}  {{$card->point}}</option>
                @endforeach
            </select>
        <br>
    @endfor
    {{Form::submit('PlayGame')}}
    {{ Form::close() }}
</div>


</body>
</html>

