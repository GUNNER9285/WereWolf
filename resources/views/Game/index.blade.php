@extends('layouts.app')

@section('title', "Card")

@section('content')
    <div class = "container">
        <div class="row">
            @foreach($games as $game)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="well">
                        Room : {{$game -> id}}
                        <br>
                        Name : {{$game -> name}}
                        <br>
                        Player : {{$game -> player}}
                        <br>
                        @foreach($game->cards as $card)
                            Card : {{$card -> name}}
                            <br>
                        @endforeach
                        <hr>
                        <a href="{{ url('/join_game/'.$game->id) }}" class="btn btn-success">Join Game</a>
                    </div>
                </div>
            @endforeach
        </div>
        <a href="{{ url('/newgame') }}" class="btn btn-primary">Create Room</a>
    </div>
@stop