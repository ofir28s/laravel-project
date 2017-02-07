@extends('layouts.app')

@section('headr')

@stop

@section('content')
	
	<h1>{{ $user->name }}</h1>

	<br/>

    <h2>Email: {{ $user->email }}</h2>

    <p><b>URL:</b> ID number of this post.</p>

    <b>id:</b> {{ $user->id }}

    <br/>

    <b>created at:</b> {{ $user->created_at }}

    <br/>

    <b>updated at:</b> {{ $user->updated_at }}

@stop

@section('footer')
 
@stop

