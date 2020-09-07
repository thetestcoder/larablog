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
                       <a href="{{route('category.edit', [$category->id])}}" class="btn btn-warning btn-sm rounded">
                           <i class="material-icons">edit</i>
                           Edit
                       </a>
                   </div>
                    <form action="{{route('category.destroy', [$category->id])}}" method="post">
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
                <td colspan="4">No Category found</td>
            </tr>
        @endforelse
    </table>
@endsection
