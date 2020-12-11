@extends('backpanel.layouts.master')
@section('content')
    @include('backpanel.layouts.success')
    <h2>All Comment</h2>
    <table class="table table-hover">
        <tr>
            <th>Name</th>
            <th>Comment</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        @forelse($comments as $comment)
            <tr>
                <td>
                    <p class="font-weight-bold">{{$comment->name}} </p>
                    <p>{{$comment->email}} </p>
                </td>
                <td>{{$comment->comment}}</td>
                <td>{{$comment->status}}</td>
                <td class="d-flex">
                    @if($comment->status === 'pending')
                        <form action="{{route('comment.approve', [$comment->id])}}" method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success btn-sm rounded">
                                <i class="material-icons">done_outline</i>
                                Approve
                            </button>
                        </form>
                    @endif
                   <div>
                       <a href="{{route('comment.edit', [$comment->id])}}" class="btn btn-warning btn-sm rounded">
                           <i class="material-icons">edit</i>
                           Edit
                       </a>
                   </div>
                    <form action="{{route('comment.destroy', [$comment->id])}}" method="post">
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
                <td colspan="4">No Comment found</td>
            </tr>
        @endforelse
    </table>
@endsection
