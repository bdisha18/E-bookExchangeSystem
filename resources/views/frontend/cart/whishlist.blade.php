@extends('frontend.layout.master')
@section('content')
<div class="row">
  <div class="col-md-11">
  <div class="heading cf">
    <h1>My Wishlist <p>{{count($products)}} Items</p></h1>

  </div>
</div>
</div>
<div class="whishlist-background">
  <div class="gallery-image">
	@foreach($products as $product)
    <div class="whishlist-img-box">
    	@if(file_exists(public_path().'/'.env('BOOK_IMAGE_PATH').$product->book_image) && $product->book_image)
         <img src="{{ asset(env('BOOK_IMAGE_PATH').$product->book_image)}}"  height='1000'  width='500'>
         @else
         <img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" >
         @endif 
       <a class="transparent-box" href="{{route('product.index', $product->book_id)}}">
      	<div class="inside">
	      		<a href="" class="fa fa-arrow-circle-o-down"></a>
      	</div>
        <div class="whishlist-caption">
          <p>{{str_limit(ucwords($product->book_name), 10)}}</p>
          <p class="opacity-low">{{str_limit(ucwords($product->author_name), 15)}}</p>
          <hr>
          <p>Rs {{$product->book_price}}</p>
       
        <span class="product-rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
           	<i class="fa fa-star grey"></i>
        </span>
         <div class="add-cart-product">
        	<a href=""><i class="fa fa-shopping-cart"></i></a>
        </div>
        </div>
      </a> 
    </div>
  @endforeach
  </div>
</div>
</div>
@stop

	
   