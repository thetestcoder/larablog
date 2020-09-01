@extends('backpanel.layouts.master')
@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    <div class="d-flex justify-content-between">
        <a href="{{route('role.create')}}" class="btn btn-primary rounded">Create Role</a>
    </div>
    <h2>All Roles</h2>
    <table class="table table-hover">
        <tr>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        @forelse($roles as $role)
            <tr>
                <td>{{$role->name}}</td>
                <td>
                    <a href="{{route('role.edit', [$role->id])}}" class="btn btn-warning btn-sm rounded">
                        <i class="material-icons">edit</i>
                        Edit
                    </a>
                    <form action="{{route('role.destroy', [$role->id])}}" method="post">
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
                <td colspan="4">No Role found</td>
            </tr>
        @endforelse
    </table>
@endsection
