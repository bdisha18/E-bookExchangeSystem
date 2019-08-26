@extends('frontend.layout.master')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="category-title">
        <h1>All PRODUCTS</h1>
        	<span><hr><p>VIEW ALL</p></span>
      </div>
    </div>
  </div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="subcategory-container"> 
		<div class="book-list-button">
		  <a href="javascript:void(0)" class="current button-format" data-filter="all"><button class="offset">All Books</button></a>
		@foreach($subcategories as $subcategory)
		  <a href="javascript:void(0)" class="button-format" data-filter="data_{{$subcategory->id}}"><button class="offset" data-filter="{{$subcategory->id}}" >{{$subcategory->category_name}}</button></a>
		@endforeach
		</div>
	</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		@foreach($books as $book)
		<div class="filter-card-wrapper data-items data_{{$book->category_id}} ">
		  <div class=" inside">
		   <i class="fa fa-heart"></i>
		  </div>
		  <a href="{{route('product.index', $book->book_id)}}">
		  <div class="filter-card-container">
		    <div class="top">
		    	@if(file_exists(public_path().'/'.env('BOOK_IMAGE_PATH').$book->book_image) && $book->book_image)
	          <img src="{{ asset(env('BOOK_IMAGE_PATH').$book->book_image)}}" alt="Book Cover" height='260' width='250'>
	           @else
	          <img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" alt="profile pic">
	          @endif 
		    </div>
		    <div class="bottom">
		      <div class="left">
		        <div class="filter-card-details">
		          <h4>{{str_limit(ucwords($book->book_name), 14)}}</h4>
		          <p>{{str_limit(ucwords($book->author_name), 20)}}</p>
		           <span class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star grey"></i>
                  </span>
		          <p>Rs {{$book->book_price}}</p>
		        </div>
		        <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
		      </div>
		    </div>
		  </div>
		</a>
		</div>
		@endforeach
	</div>
</div>
@stop
