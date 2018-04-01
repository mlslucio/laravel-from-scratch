<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
Use \App\Comment;

class CommentController extends Controller
{
    public function addComment(Post $post){
        $post->addComment(request('body'));
        return back();
    }
}
