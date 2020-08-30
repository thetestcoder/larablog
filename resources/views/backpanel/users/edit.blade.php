@extends('backpanel.layouts.master')
@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{route('user.index')}}" class="btn btn-primary rounded">All Users</a>
    </div>
    <h3 class="text-center">Update {{$user->name}}</h3>
    <form action="{{route('user.update', [$user->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input
                id="name"
                type="text"
                class="form-control"
                name="name"
                placeholder="Enter User Name"
                value="{{$user->name}}"
            >
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input
                id="email"
                type="email"
                class="form-control"
                name="email"
                placeholder="Enter User Email"
                value="{{$user->email}}"
            >
        </div>
        <button
            class="btn btn-primary btn-block rounded"
            type="submit">Update User</button>
    </form>
@endsection
