@extends('app')

@section('title', "Card")

@section('content')
    <div class="row">
        @foreach($cards as $card)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="well">
                    Name : {{$card -> name}}
                    <br>
                    Effect : {{$card -> effect}}
                    <br>
                    Image : {{$card -> image}}
                    <br>
                    Point : {{$card -> point}}
                    <br>
                </div>
            </div>
        @endforeach
    </div>


    <a href="{{ url('/card/create') }}" class="btn btn-primary">Create</a>

@stop