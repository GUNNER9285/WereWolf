@extends('layouts.app')

@section('title', "Card")

@section('content')
    <div class = "container">
        <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="well" style="height: 225px">
                        Name : {{$card -> name}}
                        <br>
                        Effect : {!! $card -> effect !!}
                        <br>
                        Point : {{$card -> point}}
                        <br>

                        <br>
                    </div>
                </div>
        </div>
    </div>
@stop