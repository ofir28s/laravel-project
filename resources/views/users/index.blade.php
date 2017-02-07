@extends('layouts.app')

@section('headr')

@stop

@section('content')

    <h1>The Users Page</h1>

    <p>here view users from database (table users)</p>

    <h2>All Users</h2>

    <ul>
    	@foreach ($users as $user)
    		<li>
    			<a href="/users/{{ $user->id }}">{{ $user->name }}</a>
    		</li>
    	@endforeach
    </ul>

@stop

@section('footer')
 
@stop

