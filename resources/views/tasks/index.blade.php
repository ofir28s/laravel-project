@extends('layouts.app')

@section('headr')

@stop

@section('content')

    <h1>The Tasks Page</h1>

    <p>here view tasks from database (table tasks)</p>

    <h2>The Tasks</h2>

    <ul>
    	@foreach ($tasks as $task)
    		<li>{{ $task->body }} <a href="/tasks/{{ $task->id }}">his ID: {{ $task->id }}</a></li>
    	@endforeach
    </ul>

@stop

@section('footer')
 
@stop

