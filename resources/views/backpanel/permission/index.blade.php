@extends('backpanel.layouts.master')
@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    <div class="d-flex justify-content-between">
        <a href="{{route('permission.create')}}" class="btn btn-primary rounded">Create Permission</a>
    </div>
    <h2>All Permission</h2>
    <table class="table table-hover">
        <tr>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        @forelse($permissions as $permission)
            <tr>
                <td>{{$permission->name}}</td>
                <td>
                    <a href="{{route('permission.edit', [$permission->id])}}" class="btn btn-warning btn-sm rounded">
                        <i class="material-icons">edit</i>
                        Edit
                    </a>
                    <form action="{{route('permission.destroy', [$permission->id])}}" method="post">
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
                <td colspan="4">No Permission found</td>
            </tr>
        @endforelse
    </table>
@endsection
