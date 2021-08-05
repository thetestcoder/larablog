@extends('backpanel.layouts.master')
@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{route('tag.index')}}" class="btn btn-primary rounded">All Tag</a>
    </div>
    <h3 class="text-center">Create A New Tag</h3>
    @include('backpanel.layouts.errors')
    <form action="{{route('tag.update', [$tag->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input
                id="name"
                type="text"
                class="form-control"
                name="name"
                placeholder="Enter Tag Name"
                value="{{$tag->name}}"
            >
        </div>
        <button
            class="btn btn-primary btn-block rounded"
            type="submit">Update Tag</button>
    </form>
@endsection
