<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\User;
use App\Http\Requests\RegistrationRequest;

class PostController extends Controller
{  

    public function index(){
        $user = User::find(auth()->id());
        $posts = $user->posts;
        return view('posts.index',compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(RegistrationRequest $request){

        $post = Post::create([
            'user_id' => auth()->id(),

            'title' => request('title'),
            'body' => request('body')
        ]);

        $tag = Tag::find(2);
        $post->tags()->sync($tag);
        return redirect('/posts');
    }

    public function show($id){
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }
}
