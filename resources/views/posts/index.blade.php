@extends('layouts.master')

@section('headr')

@stop

@section('content')

        @foreach ($posts as $post)

            @include ('posts.post')

        @endforeach

            <nav class="blog-pagination">
              <a class="btn btn-outline-primary" href="#">Older</a>
              <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>

{{-- -- with not style design --

    <h1>The Posts Page</h1>

    <p>here view posts from database (table posts)</p>

    <h2>The Posts</h2>

    <ul>
    	@foreach ($posts as $post)
    		<li>
    			{{ $post->body }}
    			<br/>
    			<a href="/posts/{{ $post->id }}">go to post (post number {{ $post->id }})</a>
    		</li>
    	@endforeach
    </ul> --}}

@stop

@section('footer')
 
@stop

