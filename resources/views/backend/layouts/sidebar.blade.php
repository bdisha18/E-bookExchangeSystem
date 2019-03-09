<aside class="admin-sidebar">
    <div class="admin-sidebar-brand">
        <!-- begin sidebar branding-->
        <img class="admin-brand-logo" src="/image/download.jpeg" width="30" height="30" alt="Logo">
        <span class="admin-brand-content font-secondary"><a href='/default/'> Admin</a>
        </span>

        <!-- end sidebar branding-->
        <div class="ml-auto">
            <!-- sidebar pin-->
            <a href="#" class="admin-pin-sidebar btn-ghost btn btn-rounded-circle"></a>
            <!-- sidebar close for mobile device-->
            <a href="#" class="admin-close-sidebar"></a>
        </div>
    </div>
    <div class="admin-sidebar-wrapper js-scrollbar">
        <ul class="menu">
            <li class="menu-item active ">
                <a href="{{route('admin.dashboard')}}" class="open-dropdown menu-link">
                    <span class="menu-label">
                        <span class="menu-name">Dashboard</span>
                    </span>
                    <span class="menu-icon">
                        <i class="icon-placeholder mdi mdi-shape-outline "></i>
                    </span>
                </a>
            </li>
            <li class="menu-item active ">
                <a href="{{route('user.index')}}" class="open-dropdown menu-link">
                    <span class="menu-label">
                        <span class="menu-name">Users</span>
                    </span>
                    <span class="menu-icon">
                        <i class="icon-placeholder mdi mdi-account-outline "></i>
                    </span>
                </a>
            </li>

             <li class="treeview menu-item <?= ($requestRoute == 'admin.index') ? 'active' : '' ?>">
                <a class="menu-link" href="{{route('admin.index')}}">
                    <span class="menu-label">
                        <span class="menu-name">Admin</span>
                    </span>
                    <span class="menu-icon">
                        <i class="icon-placeholder mdi mdi-account-outline "></i>
                    </span>
                </a>
            </li>
            
        </ul>
    </div>
</aside>
