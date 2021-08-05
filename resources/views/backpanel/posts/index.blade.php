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
    <h2>All Post</h2>
    <table class="table table-hover">
        <tr>
            <th>Name</th>
            <th>Slug</th>
            <th>Actions</th>
        </tr>
        @forelse($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td class="d-flex">
                    <div>
                        <a href="{{route('single-post', [$post->slug])}}"
                           class="btn btn-success btn-sm rounded">
                            <i class="material-icons">remove_red_eye</i>
                            View
                        </a>
                    </div>
                   @can('update', $post)
                        <div>
                            <a href="{{route('post.edit', [$post->id])}}" class="btn btn-warning btn-sm rounded">
                                <i class="material-icons">edit</i>
                                Edit
                            </a>
                        </div>
                    @endcan
                    @can('delete', $post)
                    <form action="{{route('post.destroy', [$post->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm rounded">
                            <i class="material-icons">delete</i>
                            Delete
                        </button>
                    </form>
                    @endcan
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No Post found</td>
            </tr>
        @endforelse
    </table>
@endsection
