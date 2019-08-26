<head>
  <style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  margin-right: 20%;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #3e8e41;}

  </style>
</head>
<header>
  <div class="row">
  <div class="col-md-12">
<div class="page">
              <div class="container">
                    <div class="topnav">
                      <div class="col-md-3">
                        <form action="" class="search-form">
                            <div class="form-group has-feedback">
                            <label for="search" class="sr-only">Search</label>
                            <input type="text" class="form-control" name="search" id="search" placeholder="search">
                              <span class="fa fa-search form-control-feedback"></span>
                          </div>
                        </form>
                      </div>
                      <div class="mid-nav">
                      <a href="{{route('home.index')}}">Home</a>
                      <a href="#news">library</a>
                      <a><img src="{{asset('image/book.png')}}" height="30px;"></a>
                      <a href="#contact">E-Books</a>
                      <a href="#about">Book Store</a>
                      </div>
                      <div class="side-nav">
                        <a href="{{route('user.index')}}" class="fa fa-user-o"><p>Profile</p></a>
                        <a href="{{route('publish.create')}}" class="fa fa-upload"><p>Upload</p></a>
                        <a href="{{route('second.index')}}" class="fa fa-handshake-o"><p>Sell Your Book</p></a>
                        <a href="{{route('cart.whishlist')}}" class="fa fa-heart-o"><p>Wishlist</p></a>
                        <a href="{{route('cart.index')}}" class="fa fa-shopping-bag"><p>Bag</p></a>
                      </div>
                    </div>
                       <!--  @if(Auth::guard('member')->user())
                        <div class="dropdown"> 
                          @if(file_exists(public_path().'/'.env('USER_IMAGE_PATH').Auth::guard('member')->user()->image) && Auth::guard('member')->user()->image)
                          <img src="{{ asset(env('USER_IMAGE_PATH').Auth::guard('member')->user()->image)}}" alt="Book Cover" class="rounded-circle" height="50px" width="50px" style="margin-left: 26px; margin-top: 5px;">
                          @else
                           <a><img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" alt="profile pic"></a>
                           @endif
                           <div class="dropdown-content" style="right: 0">
                             <a href="{{route('user.edit')}}">Profile</a>
                             <a href="{{route('order.index')}}">My Orders</a>
                             <a href="{{route('password.edit')}}">Change Password</a>
                             <a href="{{route('user.logout')}}">Logout</a> 
                            </div>
                           {{Auth::guard('member')->user()->fname}}
                           </div> 
                        @else
                        <button class="login-button"><a href="{{route('user.login')}}">Login</a></button>
                        @endif -->
                    </div>
              </div>
            </div>
          </div>
        </div>
</header>