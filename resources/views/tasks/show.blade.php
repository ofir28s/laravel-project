@extends('layouts.app')

@section('headr')

@stop

@section('content')

    <h2>The Task:</h2>

    <h1>{{ $task->body }}</h1>

    <br/>

    <p>The result of slash and his ID number.</p>

    <b>id:</b> {{ $task->id }}

    <br/>

    <b>created at:</b> {{ $task->created_at }}

    <br/>

    <b>updated at:</b> {{ $task->updated_at }}

    <br/>

    <b>complete: </b> {{ $task->complete }}

@stop

@section('footer')
 
@stop

