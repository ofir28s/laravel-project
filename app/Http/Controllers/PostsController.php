<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        // past to first - orderBy('created_at', 'desc')
    	$posts = Post::published()->orderBy('published_at', 'desc')->get();

    	return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::published()->findOrFail($id);

    	return view('posts.show', compact('post'));
    }

    public function create()
    {
        
        return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required|max:50',
            'body' => 'required'
        ]);

        Post::create(request(['title', 'body']));

        // // -- for PHP ORIGINAL CODE:

        // // Create a new post using the request data
        // $post = new Post;
        // $post->title = request('title');
        // $post->body = Request('body');

        // // Save it to the database
        // $post->save();

        // // -- end for PHP --

        // And then redirect to the home page.
        return redirect('/');
    }
}
