@extends('app')

@section('title', "Create")

@section('content')

    {{ Form::model($card,['url' => '/card/'.$card->id, 'method' => 'patch']) }}

        @include('Card._form')

    {{ Form::close() }}

@stop