<!--site header begins-->
<main class="admin-main">
    <header class="admin-header">
        <a href="#" class="sidebar-toggle" data-toggleclass="sidebar-open" 
        data-target="body"> </a>
        <nav class=" ml-auto">
            <ul class="nav align-items-center">
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#"   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <span class="avatar-title rounded-circle bg-dark">V</span>
                    </div>
                    </a>
                    <div class="dropdown-menu  dropdown-menu-right"   >
                        <!-- <a class="dropdown-item" href="">  Reset Password</a> -->
                        <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
</main>