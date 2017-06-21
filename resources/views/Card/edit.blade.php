@extends('layouts.app')

@section('title', "Create")

@section('content')

    {{ Form::model($card,['url' => '/card/'.$card->id, 'method' => 'patch']) }}
        @include('Card._form', ['submitBtn' => 'Finish'])
    {{ Form::close() }}

@stop