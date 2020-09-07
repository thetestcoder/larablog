<div class="sidebar" data-color="purple" data-background-color="white">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            Logo
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Larablog Admin Side
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="{{route('backpanel.dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('category.index')}}">
                    <i class="material-icons">all_inbox</i>
                    <p>Categories</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('permission.index')}}">
                    <i class="material-icons">work</i>
                    <p>Permissions</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('role.index')}}">
                    <i class="material-icons">group_work</i>
                    <p>Roles</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('user.index')}}">
                    <i class="material-icons">face</i>
                    <p>User</p>
                </a>
            </li>
            <!-- your sidebar here -->
        </ul>
    </div>
</div>
