@extends('backpanel.layouts.master')
@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{route('role.index')}}" class="btn btn-primary rounded">All Roles</a>
    </div>
    @include('backpanel.layouts.success')
    <h3 class="text-center">Assign Permission To {{$role->name}}</h3>
    @include('backpanel.layouts.errors')
    <form action="{{route('role.store.permission', [$role->id])}}" method="post">
        @csrf
        @forelse($permissions as $permission)
            <div class="form-group">
               <table class="table">
                   <tr>
                       <td>
                           <label for="permission">{{$permission->name}}</label>
                       </td>
                       <td class="text-right">
                           <input
                               type="checkbox"
                               name="permission[]"
                               id="permission"
                               value="{{$permission->id}}"
                               @if($role->hasPermissionTo($permission->id)) checked @endif
                           >
                       </td>
                   </tr>
               </table>
            </div>
            @empty
            <p>No Permission Added Yet</p>
        @endforelse
        <button type="submit" class="btn btn-primary btn-block">Save Permission</button>
    </form>
@endsection
