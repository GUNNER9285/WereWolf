@extends('layouts.app')

@section('title', "Card")

@section('content')
    <div class = "container">
        <a href="{{ url('/newgame') }}" class="btn btn-primary">Create Room</a>
        <br><br>
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
                        <div style="display: inline">
                            <a href="{{ url('game/'.$game->id.'/selectcard') }}" class="btn btn-success">Select Card</a>
                            <a href="{{ url('/join_game/'.$game->id) }}" class="btn btn-primary">Join Game</a>
                            {{ Form::model($game,['url' => '/game/'.$game->id.'/delete', 'method' => 'delete',
                            'style' => 'display:inline']) }}
                            <button class = 'btn btn-danger' type="submit">
                                Delete
                            </button>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $games->links() }}
    </div>
@stop