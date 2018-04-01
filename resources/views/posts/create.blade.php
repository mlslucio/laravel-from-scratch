@extends('layout')

@section('content')
    <div class="row">
        <div class="col-sm-9 col-sm">
            <form class="form-control" method="post" action="/posts">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">title</label>
                    <input class="form-control" name="title" type="text">
                </div>
                <div class="form-group">
                    <label for="body">title</label>
                    <input class="form-control" name="body" type="text">
                </div>
                <button class="btn btn-default">Send</button>
            </form>
        </div>
    </div>
    @include('form-validation-errors');
@endsection