@extends('backpanel.layouts.master')
@section('content')
    @include('backpanel.layouts.success')
    <div class="d-flex justify-content-between">
        <a href="{{route('category.create')}}"
           class="btn btn-primary rounded"
        >Create Category</a>
        <a
            href="{{route('category.trash')}}"
            class="btn btn-danger rounded"
        >Trash</a>
    </div>
    <h2>All Category</h2>
    <table class="table table-hover">
        <tr>
            <th>Name</th>
            <th>Slug</th>
            <th>Actions</th>
        </tr>
        @forelse($categories as $category)
            <tr>
                <td>{{$category->name}}</td>
                <td>{{$category->slug}}</td>
                <td class="d-flex">
                   <div>
                    <form action="{{route('category.restore', [$category->id])}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-warning btn-sm rounded">
                            <i class="material-icons">restore</i>
                            Restore
                        </button>
                    </form>
                   </div>
                    <form action="{{route('category.force.delete', [$category->id])}}" method="post">
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
                <td colspan="4">No Category found</td>
            </tr>
        @endforelse
    </table>
@endsection
