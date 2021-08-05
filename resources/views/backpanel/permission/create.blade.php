@extends('backpanel.layouts.master')
@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{route('permission.index')}}" class="btn btn-primary rounded">All Permissions</a>
    </div>
    <h3 class="text-center">Create A New Permission</h3>
    @include('backpanel.layouts.errors')
    <form action="{{route('permission.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input
                id="name"
                type="text"
                class="form-control"
                name="name"
                placeholder="Enter Permission Name"
            >
        </div>
        <button
            class="btn btn-primary btn-block rounded"
            type="submit">Save Permission</button>
    </form>
@endsection
