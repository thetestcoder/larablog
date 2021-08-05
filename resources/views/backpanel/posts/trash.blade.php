@extends('backpanel.layouts.master')
@section('content')
    @include('backpanel.layouts.success')
    <div class="d-flex justify-content-between">
        <a href="{{route('post.create')}}"
           class="btn btn-primary rounded"
        >Create Post</a>
        <a
            href="{{route('post.trash')}}"
            class="btn btn-danger rounded"
        >Trash</a>
    </div>
    <h2>All Trashed Post</h2>
    <table class="table table-hover">
        <tr>
            <th>Title</th>
            <th>Slug</th>
            <th>Actions</th>
        </tr>
        @forelse($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td class="d-flex">
                   <div>
                    <form action="{{route('post.restore', [$post->id])}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-warning btn-sm rounded">
                            <i class="material-icons">restore</i>
                            Restore
                        </button>
                    </form>
                   </div>
                    <form action="{{route('post.force.delete', [$post->id])}}" method="post">
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
                <td colspan="4">No Trashed Post found</td>
            </tr>
        @endforelse
    </table>
@endsection
