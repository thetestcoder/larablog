@extends('backpanel.layouts.master')
@section('content')
    @include('backpanel.layouts.success')
    <div class="d-flex justify-content-between">
        <a href="{{route('tag.create')}}"
           class="btn btn-primary rounded"
        >Create Tag</a>
        <a
            href="{{route('tag.trash')}}"
            class="btn btn-danger rounded"
        >Trash</a>
    </div>
    <h2>All Tag</h2>
    <table class="table table-hover">
        <tr>
            <th>Name</th>
            <th>Slug</th>
            <th>Actions</th>
        </tr>
        @forelse($tags as $tag)
            <tr>
                <td>{{$tag->name}}</td>
                <td>{{$tag->slug}}</td>
                <td class="d-flex">
                   <div>
                    <form action="{{route('tag.restore', [$tag->id])}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-warning btn-sm rounded">
                            <i class="material-icons">restore</i>
                            Restore
                        </button>
                    </form>
                   </div>
                    <form action="{{route('tag.force.delete', [$tag->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm rounded">
                            <i class="material-icons">delete</i>
                            Force Delete
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No Tag found</td>
            </tr>
        @endforelse
    </table>
@endsection
