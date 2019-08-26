@extends('frontend.layout.master')
@section('content')
<div class="row">
	<div class="col-md-12 account-page">
		<hr>
		<div class="account-box">
			@if(file_exists(public_path().'/'.env('USER_IMAGE_PATH').Auth::guard('member')->user()->image) && Auth::guard('member')->user()->image)
            <img src="{{ asset(env('USER_IMAGE_PATH').Auth::guard('member')->user()->image)}}" alt="Book Cover" class="account-img" height="136px" width="145px">
            @else
            <a><img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" alt="profile pic"></a>
           @endif
           <span>{{ucwords($users->fname ." ". $users->lname)}}</span><span>{{$users->email}}</span>
           <a href="{{route('user.edit')}}"><button class="btn btn-primary">Edit Profile</button></a>
		</div>
		<hr>
		<div class="col-md-4">
			<a href="{{route('order.index')}}">
			<div class="profile-card-border">
				<i class="fa fa-cube"></i>
				<h5><b>Orders</b></h5>
				<p>Check your Order Status.</p>
			</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="{{route('cart.whishlist')}}">
			<div class="profile-card-border">
				<i class="fa fa-object-group"></i>
				<h5><b>Collections & Wishlists</b></h5>
				<p>All your Curated Book Collections.</p>
			</div>
		</div>
		<div class="col-md-4">
			<a href="{{route('card.index')}}">
			<div class="profile-card-border">
				<i class="fa fa-credit-card-alt"></i>
				<h5><b>Saved Cards</b></h5>
				<p>Save Your Card For Faster Checkout.</p>
			</div>
		</a>
		</div>
		<div class="col-md-4">
			<a href="{{route('address.index')}}">
			<div class="profile-card-border">
				<i class="fa fa-address-card-o"></i>
				<h5><b>Addresses</b></h5>
				<p>Save Addresses For Hassle Free Checkout.</p>
			</div>
		</a>
		</div>
		<div class="col-md-4">
			<a href="{{route('user.edit')}}">
			<div class="profile-card-border">
				<i class="fa fa-user-o"></i>
				<h5><b>Profile</b></h5>
				<p>Change Yor Profile Details.</p>
			</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="{{route('password.edit')}}">
			<div class="profile-card-border">
				<i class="fa fa-unlock-alt"></i>
				<h5><b>Change Password</b></h5>
				<p>Change Your Password.</p>
			</div>
			</a>
		</div>
	</div>
</div>
</div>
@stop