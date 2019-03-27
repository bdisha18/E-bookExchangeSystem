<aside class="admin-sidebar">
    <div class="admin-sidebar-brand">
        <!-- begin sidebar branding-->
        <img class="admin-brand-logo" src="{{asset('/image/admin/download.jpeg')}}" width="30" height="30">
        <span class="admin-brand-content font-secondary"><a href='/default/'> Admin</a>
        </span>

        <!-- end sidebar branding-->
        <div class="ml-auto">
            <!-- sidebar close for mobile device-->
            <a href="#" class="admin-close-sidebar"></a>
        </div>
    </div>
    <div class="admin-sidebar-wrapper js-scrollbar">
        <ul class="menu" data-widget="tree">
            <?php $requestRoute = \Request::route()->getName(); ?>
            
            <li class="treeview menu-item <?= ($requestRoute == 'admin.dashboard') ? 'active' : '' ?>">
                <a href="{{route('admin.dashboard')}}" class="menu-link">
                    <span class="menu-label">
                        <span class="menu-name">Dashboard</span>
                    </span>
                    <span class="menu-icon">
                        <i class="icon-placeholder mdi mdi-shape-outline "></i>
                    </span>
                </a>
            </li>
            <li class="treeview menu-item <?= ($requestRoute == 'user.index') ? 'active' : '' ?>">
                <a href="{{route('user.index')}}" class="menu-link">
                    <span class="menu-label">
                        <span class="menu-name">Users</span>
                    </span>
                    <span class="menu-icon">
                        <i class="icon-placeholder mdi mdi-account-multiple "></i>
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
             <li class="treeview menu-item <?= ($requestRoute == 'publisher.index') ? 'active' : '' ?>">
                <a class="menu-link" href="{{route('publisher.index')}}">
                    <span class="menu-label">
                        <span class="menu-name">Publishers</span>
                    </span>
                    <span class="menu-icon">
                        <i class="icon-placeholder mdi mdi-account-outline "></i>
                    </span>
                </a>
            </li>
            <li class="treeview menu-item <?= ($requestRoute == 'transaction.index') ? 'active' : '' ?>">
                <a class="menu-link" href="{{route('transaction.index')}}">
                    <span class="menu-label">
                        <span class="menu-name">Transactions</span>
                    </span>
                    <span class="menu-icon">
                        <i class="icon-placeholder mdi mdi-account-outline "></i>
                    </span>
                </a>
            </li>
            <li class="treeview menu-item <?= ($requestRoute == 'admin.index') ? 'active' : '' ?>">
                <a class="menu-link">
                    <span class="menu-label">
                        <span class="menu-name">Documents</span>
                    </span>
                    <span class="menu-icon">
                        <i class="icon-placeholder mdi mdi-account-outline "></i>
                    </span>
                </a>
            </li>
            <li class="treeview menu-item <?= ($requestRoute == 'book.index') ? 'active' : '' ?>">
                <a class="menu-link" href="{{route('book.index')}}">
                    <span class="menu-label">
                        <span class="menu-name">Books</span>
                    </span>
                    <span class="menu-icon">
                        <i class="fa fa-address-book"></i>
                    </span>
                </a>
            </li>
             <li class="treeview menu-item <?= ($requestRoute == 'offer.index') ? 'active' : '' ?>">
                <a class="menu-link" href="{{route('offer.index')}}">
                    <span class="menu-label">
                        <span class="menu-name">Offers</span>
                    </span>
                    <span class="menu-icon">
                        <i class="fa fa-address-book"></i>
                    </span>
                </a>
            </li>
           <li class="treeview menu-item <?= ($requestRoute == 'email.index') ? 'active' : '' ?>">
                <a class="menu-link" href="{{route('email.index')}}">
                    <span class="menu-label">
                        <span class="menu-name">Emails</span>
                    </span>
                    <span class="menu-icon">
                        <i class="fa fa-address-book"></i>
                    </span>
                </a>
            </li>
            <li class="treeview menu-item <?= ($requestRoute == 'template.index') ? 'active' : '' ?>">
                <a class="menu-link" href="{{route('template.index')}}">
                    <span class="menu-label">
                        <span class="menu-name">Email Templates</span>
                    </span>
                    <span class="menu-icon">
                        <i class="fa fa-address-book"></i>
                    </span>
                </a>
            </li>
            <li class="treeview menu-item <?= ($requestRoute == 'email.index') ? 'active' : '' ?>">
                <a class="menu-link" href="{{route('email.index')}}">
                    <span class="menu-label">
                        <span class="menu-name">Categories</span>
                    </span>
                    <span class="menu-icon">
                        <i class="fa fa-address-book"></i>
                    </span>
                </a>
            </li>
            <li class="treeview menu-item <?= ($requestRoute == 'email.index') ? 'active' : '' ?>">
                <a class="menu-link" href="{{route('email.index')}}">
                    <span class="menu-label">
                        <span class="menu-name">Ratings</span>
                    </span>
                    <span class="menu-icon">
                        <i class="fa fa-address-book"></i>
                    </span>
                </a>
            </li>
            <li class="treeview menu-item <?= ($requestRoute == 'email.index') ? 'active' : '' ?>">
                <a class="menu-link" href="{{route('email.index')}}">
                    <span class="menu-label">
                        <span class="menu-name">Testimonials</span>
                    </span>
                    <span class="menu-icon">
                        <i class="fa fa-address-book"></i>
                    </span>
                </a>
            </li>
            <li class="treeview menu-item <?= ($requestRoute == 'address.index') ? 'active' : '' ?>">
                <a class="menu-link" href="{{route('address.index')}}">
                    <span class="menu-label">
                        <span class="menu-name">Address</span>
                    </span>
                    <span class="menu-icon">
                        <i class="fa fa-address-book"></i>
                    </span>
                </a>
            </li>
            <li class="treeview menu-item <?= ($requestRoute == 'email.index') ? 'active' : '' ?>">
                <a class="menu-link" href="{{route('email.index')}}">
                    <span class="menu-label">
                        <span class="menu-name">Orders</span>
                    </span>
                    <span class="menu-icon">
                        <i class="fa fa-address-book"></i>
                    </span>
                </a>
            </li>
            <li class="treeview menu-item <?= ($requestRoute == 'interest.index') ? 'active' : '' ?>">
                <a class="menu-link" href="{{route('interest.index')}}">
                    <span class="menu-label">
                        <span class="menu-name">Interests</span>
                    </span>
                    <span class="menu-icon">
                        <i class="fa fa-address-book"></i>
                    </span>
                </a>
            </li>
            
           
            
        </ul>
    </div>
</aside>
