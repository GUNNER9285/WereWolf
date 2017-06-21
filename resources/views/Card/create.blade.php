@extends('layouts.app')

@section('title', "Create")

@section('content')
    <div class = "container">
        {{ Form::open(['url' => '/card']) }}
            @include('Card._form', ['submitBtn' => 'Create'])

        {{ Form::close() }}
    </div>

@stop