@extends('app')

@section('title', "Card")

@section('content')
    <div class="row">
        @foreach($games as $game)
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="well">
                    Name : {{$game -> name}}
                    <br>
                    Player : {{$game -> player}}
                    <br>
                    @foreach($game->cards as $card)
                        Card : {{$card -> name}}
                        <br>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

@stop