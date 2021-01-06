<div
    class="sidebar"
    data-color="purple"
    data-background-color="white"
    style="overflow-y: scroll; overflow-x: hidden"
>
    <div class="logo">
        <a href="#" class="simple-text logo-mini">
            <img src="{{auth()->user()->avatar}}" alt="{{auth()->user()->name}}" class="img-fluid rounded-circle"
                 style="width: 100px; height: 100px; object-fit: cover">
        </a>
        <a href="#" class="simple-text logo-normal">
            {{auth()->user()->name ?? "Blog Name"}}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item  @if(Request::is('backpanel')) active @endif">
                <a class="nav-link" href="{{route('backpanel.dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item @if(Request::is('backpanel/post') || Request::is('backpanel/post/*')) active @endif">
                <a class="nav-link" href="{{route('post.index')}}">
                    <i class="material-icons">article</i>
                    <p>Posts</p>
                </a>
            </li>
            @hasanyrole('editor|admin')
            <li
                class="nav-item
@if(Request::is('backpanel/category') || Request::is('backpanel/category/*')) active
@endif"
            >
                <a class="nav-link" href="{{route('category.index')}}">
                    <i class="material-icons">all_inbox</i>
                    <p>Categories</p>
                </a>
            </li>
            <li class="nav-item @if(Request::is('backpanel/tag') || Request::is('backpanel/tag/*')) active
@endif">
                <a class="nav-link" href="{{route('tag.index')}}">
                    <i class="material-icons">scatter_plot</i>
                    <p>Tags</p>
                </a>
            </li>
            @endhasanyrole
            <li class="nav-item @if(Request::is('backpanel/comment') || Request::is('backpanel/comment/*')) active
@endif">
                <a class="nav-link" href="{{route('comment.index')}}">
                    <i class="material-icons">batch_prediction</i>
                    <p>Comments</p>
                </a>
            </li>
            @role('admin')
            <li class="nav-item @if(Request::is('backpanel/permission') || Request::is('backpanel/permission/*'))
                active
@endif">
                <a class="nav-link" href="{{route('permission.index')}}">
                    <i class="material-icons">work</i>
                    <p>Permissions</p>
                </a>
            </li>
            <li class="nav-item @if(Request::is('backpanel/role') || Request::is('backpanel/role/*')) active
@endif">
                <a class="nav-link" href="{{route('role.index')}}">
                    <i class="material-icons">group_work</i>
                    <p>Roles</p>
                </a>
            </li>
            <li class="nav-item @if(Request::is('backpanel/site-settings')) active
@endif">
                <a class="nav-link" href="{{route('setting.index')}}">
                    <i class="material-icons">settings</i>
                    <p>Site Settings</p>
                </a>
            </li>
            <li class="nav-item @if(Request::is('backpanel/user') || Request::is('backpanel/user/*')) active
@endif">
                <a class="nav-link" href="{{route('user.index')}}">
                    <i class="material-icons">face</i>
                    <p>User</p>
                </a>
            </li>
            @endrole
            <!-- your sidebar here -->
        </ul>
    </div>
</div>
