@extends('layout')

@section('header')
    <title>Posts</title>
@endsection

@section('content')
    @foreach($posts as $post)
        <div class="row">
            <h4><a href="posts/{{$post->id}}">{{$post->title}}</a></h4>
        </div>
        <div class="row">
            <h7>Body: {{$post->body}}</h7>
        </div>
        <div class="row">
            {{\Carbon\Carbon::parse($post->created_at)->format('d/m/Y')}}
        </div>
        <hr>
    @endforeach
@endsection

@section('footer')
   <script></script>
@endsection