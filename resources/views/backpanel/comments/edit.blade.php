@extends('backpanel.layouts.master')
@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{route('comment.index')}}" class="btn btn-primary rounded">All Comment</a>
    </div>
    @include('backpanel.layouts.errors')
    <form action="{{route('comment.update', [$comment->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Comment Body</label>
            <textarea
                id="name"
                class="form-control"
                name="comment"
            >{{$comment->comment}}</textarea>
        </div>
        <button
            class="btn btn-primary btn-block rounded"
            type="submit">Update Comment</button>
    </form>
@endsection
