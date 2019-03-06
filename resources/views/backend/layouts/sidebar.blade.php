<aside class="admin-sidebar">
    <div class="admin-sidebar-brand">
        <!-- begin sidebar branding-->
        <img src="http://localhost/socialsite/public/image/download.jpeg" width="30" height="30" >
        <span class="admin-brand-content font-secondary"><a href="{{route('admin.dashboard')}}"> Admin</a>
        </span>
    </div>
    <div class="admin-sidebar-wrapper js-scrollbar">
        <ul class="menu" data-widget="tree">
            <?php $requestRoute = \Request::route()->getName(); ?>
                    
            <li class="treeview menu-item <?= ($requestRoute == 'admin.dashboard') ? 'active' : '' ?>">
                <a class="menu-link" href="{{route('admin.dashboard')}}">
                    <span class="menu-label">
                        <span class="menu-name">Dashboard</span>
                    </span>
                    <span class="menu-icon">
                        <i class="icon-placeholder mdi mdi-shape-outline ">
                        </i>
                    </span>
                </a>
            </li>

            
            <li class="treeview menu-item <?= ($requestRoute == 'user.index') ? 'active' : '' ?>">
                <a class="menu-link" href="{{route('user.index')}}">
                    <span class="menu-label">
                        <span class="menu-name">User</span>
                    </span>
                    <span class="menu-icon">
                        <i class="icon-placeholder mdi mdi-account-outline "></i>
                    </span>
                </a>
            </li>
            
        </ul>
    </div>
</aside>
