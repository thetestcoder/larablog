@extends('backpanel.layouts.master')
@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    <div class="d-flex justify-content-between">
        <a href="{{route('user.create')}}" class="btn btn-primary rounded">Create User</a>
    </div>
    <h2>All Users</h2>
    <table class="table table-hover">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
        @forelse($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>Admin</td>
                <td>
                    <a href="{{route('user.edit', [$user->id])}}" class="btn btn-warning btn-sm rounded">
                        <i class="material-icons">edit</i>
                        Edit
                    </a>
                    <form action="{{route('user.destroy', [$user->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm rounded">
                            <i class="material-icons">delete</i>
                            Delete
                        </button>
                    </form>

                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No users found</td>
            </tr>
        @endforelse
    </table>
@endsection
