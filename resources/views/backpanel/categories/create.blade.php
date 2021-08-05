@extends('backpanel.layouts.master')
@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{route('category.index')}}" class="btn btn-primary rounded">All Category</a>
    </div>
    <h3 class="text-center">Create A New Category</h3>
    @include('backpanel.layouts.errors')
    <form action="{{route('category.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input
                id="name"
                type="text"
                class="form-control"
                name="name"
                placeholder="Enter Category Name"
            >
        </div>
        <button
            class="btn btn-primary btn-block rounded"
            type="submit">Save Category</button>
    </form>
@endsection
