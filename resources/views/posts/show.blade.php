@extends('layout')

@section('header')
    <title>{{$post->title}}</title>
@endsection

@section('content')
    <div class="row">
        {{$post->title}}
    </div>
    <div class="row">
        {{$post->body}}
    </div>
    <hr>
    <div class="row">
        @foreach($post->comments as $comment)
            <p>{{$comment->body}}</p>
            <hr>
        @endforeach
   </div>
   <form action="/post/{{$post->id}}/comment" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="comment">New Comment</label>
            <textarea class="form-control" name="body"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-default">Add</button>
        </div>
   </form>
@endsection