@extends('app')

@section('title', "Create")

@section('content')

    {{ Form::open(['url' => '/card']) }}

        @include('Card._form')

    {{ Form::close() }}

@stop