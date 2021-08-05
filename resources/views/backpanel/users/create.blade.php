@extends('backpanel.layouts.master')
@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{route('user.index')}}" class="btn btn-primary rounded">All Users</a>
    </div>
    <h3 class="text-center">Create A New User</h3>
    @include('backpanel.layouts.errors')
    <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input
                id="name"
                type="text"
                class="form-control"
                name="name"
                placeholder="Enter User Name"
            >
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input
                id="email"
                type="email"
                class="form-control"
                name="email"
                placeholder="Enter User Email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input
                id="password"
                type="text"
                class="form-control"
                name="password"
                placeholder="Enter User Password">
        </div>
        <div class="form-group">
            <label for="roles">Roles</label>
            <select id="roles" name="role_id" class="form-control">
                @foreach($roles as $role)
                    <option value="{{$role->id}}">{{strtoupper($role->name)}}</option>
                @endforeach
            </select>
        </div>

        <label for="avatar">Avatar</label>
        <input type="file" name="avatar" id="avatar">

        <button
            class="btn btn-primary btn-block rounded"
            type="submit">Save User</button>
    </form>
@endsection
