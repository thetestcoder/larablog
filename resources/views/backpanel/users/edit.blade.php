@extends('backpanel.layouts.master')
@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{route('user.index')}}" class="btn btn-primary rounded">All Users</a>
    </div>
    <h3 class="text-center">Update {{$user->name}}</h3>
    @include('backpanel.layouts.errors')
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
        <div class="form-group">
            <label for="roles">Roles</label>
            <select id="roles" name="role_id" class="form-control">
                @foreach($roles as $role)
                    <option value="{{$role->id}}" @if($role->id === $user->role_id) selected @endif >{{strtoupper
                    ($role->name)
                    }}</option>
                @endforeach
            </select>
        </div>
        <label for="avatar">Avatar</label>
        @if($user->avatar)
            <img src="{{$user->avatar}}" alt="{{$user->name}}">
        @endif
        <input type="file" name="avatar" id="avatar">
        <button
            class="btn btn-primary btn-block rounded"
            type="submit">Update User</button>
    </form>
@endsection
