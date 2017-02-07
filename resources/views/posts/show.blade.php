@extends('layouts.master')

@section('headr')

@stop

@section('content')

    
    <h1>{{ $post->title }}</h1>

    {{ $post->body }}

    <hr>

    <div class="comments">
        <ul class="list-group"> 

        @foreach ($post->comments as $comment)

            <li class="list-group-item">

                <strong>
                    {{ $comment->created_at->diffForHumans() }}: &nbsp; 
                </strong>

                {{ $comment->body }}

            </li>

        @endforeach

        </ul>
    </div>

    <hr>

    <div class="card">
        <div class="card-blok">

            <form method="POST" action="/posts/{{ $post->id }}/comments">
                {{ csrf_field() }}
                
                <div class="form-group">
                    <textarea name="body" placeholder="your comment here." class="form-control"></textarea>
                </div>

                <div class="form-group">                        
                   <button type="submit" class="btn btn-primary">Add Comment</button>
                </div>
            </form>

            @include ('layouts.errors')

        </div>
    </div>

{{-- see below in down alternativ here --}}

@stop

@section('footer')
 
@stop



{{--__________________________________________--}}

{{-- -- with not style design --    

    <h1>Title: {{ $post->title }}</h1>

    <br/>

    <h2>The Post:</h2>

    <h1>{{ $post->body }}</h1>

    <br/>

    <p><b>URL:</b> ID number of this post.</p>

    <b>id:</b> {{ $post->id }}

    <br/>

    <b>created at:</b> {{ $post->created_at }}

    <br/>

    <b>updated at:</b> {{ $post->updated_at }} --}}