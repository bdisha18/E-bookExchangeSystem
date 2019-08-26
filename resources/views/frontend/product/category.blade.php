@extends('frontend.layout.master')
@section('content')
@php
use Illuminate\Support\Facades\Route;
@endphp
 <div class="row">
    <div class="col-md-12">
      <div class="category-title">
      	@if(Route::currentRouteName() == 'product.category')
        <h1>BOOKS</h1>
        @else
        <h1>AUDIO BOOKS</h1>
        @endif
        	<span><hr><p>VIEW ALL PRODUCTS</p></span>
      </div>
    </div>
  </div>
 <article class='gallery'>
 	@foreach($book_category as $category)
 	@if(Route::currentRouteName() == 'product.category')
  	<a class='gallery-link' href="{{route('product.list', $category->id)}}">
  	@else
  	<a class='gallery-link' href="{{route('audiobook.list', $category->id)}}">
  	@endif
    <figure class='category-gallery-image'>
    	 @if(file_exists(public_path().'/'.env('CATEGORY_IMAGE_PATH').$category->image) && $category->image)
          <img src="{{ asset(env('CATEGORY_IMAGE_PATH').$category->image)}}" alt="Book Cover" height='1400' width='1400'>
           @else
          <img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" alt="profile pic">
          @endif 
      <figcaption>{{$category->category_name}}</figcaption>
    </figure>
  </a>
  @endforeach
</article>

 <div class="row">
    <div class="col-md-12">
      <div class="category-title">
        <h1>EDITOR'S CHOICE</h1>
        	<span><hr><p>VIEW ALL</p></span>
      </div>
    </div>
  </div>

  <div class="row">
  	<div class="col-md-12">
	  <div class="row mx-auto my-auto">
	    <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
	        <div class="carousel-inner w-100" role="listbox">

				@foreach($editors_choice as $product)
	                    @if($loop->first)
	                <div class="carousel-item active">
	                  @else
	                  <div class="carousel-item">
	                  @endif
					  <div class="gallery-image">
					    <div class="whishlist-img-box">
					    	@if(file_exists(public_path().'/'.env('BOOK_IMAGE_PATH').$product->book_image) && $product->book_image)
					         <img src="{{ asset(env('BOOK_IMAGE_PATH').$product->book_image)}}"  height='1000'  width='500'>
					         @else
					         <img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" >
					         @endif 
	                  <a class="transparent-box" href="{{route('product.index', $product->book_id)}}">
					      	<div class="inside">
						      		<a href="" class="fa fa-heart"></a>
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
					</div>
					</div>
				  @endforeach
				</div>
	  			<a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
	                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	                <span class="sr-only">Previous</span>
	            </a>
	            <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
	                <span class="carousel-control-next-icon" aria-hidden="true"></span>
	                <span class="sr-only">Next</span>
	            </a>
	        </div>
	    </div>
  </div>
</div>
<div class="row">
    <div class="col-md-12">
      <div class="category-title">
        <h1>RECOMMENDED INTERESTS</h1>
        	<span><hr><p>BEST SELLING BOOKS</p></span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
    	 <div class="row mx-auto my-auto">
	    	<div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
	        	<div class="carousel-inner w-100" role="listbox">

    			@foreach($interests as $interest)
	                    @if($loop->first)
	                <div class="carousel-item active">
	                  @else
	                  <div class="carousel-item">
	                  @endif
		    	<div class="interest-content">
		    	<div class="grid">
					<figure class="effect-apollo">
						  @if(file_exists(public_path().'/'.env('CATEGORY_IMAGE_PATH').$interest->image) && $interest->image)
				          <img src="{{ asset(env('CATEGORY_IMAGE_PATH').$interest->image)}}" alt="Book Cover">
				           @else
				          <img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" alt="profile pic">
				          @endif
						<figcaption>
							<h4>{{$interest->category_name}}</h4>
							
						</figcaption>			
					</figure>
				</div>
    	    </div>
		</div>
        @endforeach
	</div>
</div>
				<a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
	                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	                <span class="sr-only">Previous</span>
	            </a>
	            <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
	                <span class="carousel-control-next-icon" aria-hidden="true"></span>
	                <span class="sr-only">Next</span>
	            </a>
	        </div>
	    </div>
	</div>
</div>
</div>


@stop
