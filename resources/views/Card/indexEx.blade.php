@extends('layouts.app')

@section('title', "Card")

@section('content')
    <div class = "container">
        <a href="{{ url('/card/create') }}" class="btn btn-primary">Create Card</a>
        <br><br>
        <div class="row">
            @foreach($cards as $card)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="well" style="height: 300px">
                        Name : {{$card -> name}}
                        <br>
                        Effect : {!! $card -> effect !!}
                        <br>
                        Point : {{$card -> point}}
                        <br>
                        <br>
                        <hr>
                    </div>
                </div>
            @endforeach
            {{ $cards->links() }}
        </div>
@stop