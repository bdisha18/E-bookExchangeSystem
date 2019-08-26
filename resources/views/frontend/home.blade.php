@extends('frontend.layout.master')
@section('content')
<div class="bg-img"></div>
  <div class="row">
    <div class="col-md-12">
      <div class="welcome">
        <h3>Welcome to Papirus book store</h3>
        <p>Tons of book collections you can choose from.<br> Books that don’t suck, we ensure the quality of our books the best you can find anywhere.</p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="best-seller">
      <h3>BestSellering Books</h3>
      <p>Top Selling Books of 2019</p>
    </div>
    </div>
  </div>
    <div class="row">
          <div class="col-md-12">
            <div class="row mx-auto my-auto">
              <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">

                    @foreach($books as $book)
                    @if($loop->first)
                <div class="carousel-item active">
                  @else
                  <div class="carousel-item">
                  @endif
                        <div class="col-md-3">
                          <div class="card">
                            <div class="card-head">
                            @if(file_exists(public_path().'/'.env('BOOK_IMAGE_PATH').$book->book_image) && $book->book_image)
                              <a href="{{route('product.index', $book->book_id)}}"><img src="{{ asset(env('BOOK_IMAGE_PATH').$book->book_image)}}" alt="Book Cover" class="card-logo img-responsive"></a>
                              @else
                              <a><img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" alt="profile pic" class="card-logo img-responsive"></a>
                              @endif 
                              
                              <i class="fa fa-heart product-img favorite favoriteIcon {{(in_array($book->book_id, $favorite_id))  ? 'active' : '' }}" data-id="{{$book->book_id}}" data-url="{{route('favorite.update', $book->book_id)}}">
                                @csrf
                                <input type="hidden" name="book_id" id="store-favorite">
                              </i>
                             
                           
                            </div>
                            <div class="card-body">
                              <div class="product-desc">
                                <span class="product-title">
                                       <b>{{str_limit(ucwords($book->book_name), 25)}}</b>
                                </span>
                                <span class="product-title">
                                       {{str_limit(ucwords($book->author_name), 25)}}
                                </span>
                                
                                <span class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star grey"></i>
                                  </span>
                                  <p class="">
                                     Rs {{$book->book_price}}
                                  </p>
                              </div>
                              <div class="product-properties">
                                  <div class="left-details">
                                    <a href="{{url('/').'/'.env('BOOK_IMAGE_PATH').$book->file}}" download><i class="fa fa-arrow-circle-o-down"></i></a> 
                                  </div>
                                  <div class="left-details">
                                    <a href="{{route('cart.add', $book->book_id)}}"><i class="fa fa-shopping-cart"></i></a>
                                    </div>  
                              </div>
                            </div>
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
      <div class="best-seller">
      <h3>New And Noteworthy</h3>
      <p>Latest books</p>
    </div>
    </div>
  </div>
    <div class="row">
          <div class="col-md-12">
            <div class="row mx-auto my-auto">
              <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">

                    @foreach($new_books as $new_book)
                    @if($loop->first)
                <div class="carousel-item active">
                  @else
                  <div class="carousel-item">
                  @endif
                        <div class="col-md-3">
                          <div class="card">
                            <div class="card-head">
                              @if(file_exists(public_path().'/'.env('BOOK_IMAGE_PATH').$new_book->book_image) && $new_book->book_image)
                              <a href="{{route('product.index', $new_book->book_id)}}"><img src="{{ asset(env('BOOK_IMAGE_PATH').$new_book->book_image)}}" alt="Book Cover" class="card-logo img-responsive"></a>
                              @else
                              <a><img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" alt="profile pic" class="card-logo img-responsive" ></a>
                              @endif 
                              <i class="fa fa-heart product-img favorite favoriteIcon {{(in_array($new_book->book_id, $favorite_id))  ? 'active' : '' }}" data-id="{{$new_book->book_id}}" data-url="{{route('favorite.update', $new_book->book_id)}}">
                                @csrf
                                <input type="hidden" name="book_id" id="store-favorite"></i>
                            </div>
                            <div class="card-body">
                              <div class="product-desc">
                                <span class="product-title">
                                       <b>{{str_limit(ucwords($new_book->book_name), 25)}}</b>
                                </span>
                                <span class="product-title">
                                       {{str_limit(ucwords($new_book->author_name), 25)}}
                                </span>
                                
                                <span class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star grey"></i>
                                  </span>
                                  <p class="">
                                     Rs {{$new_book->book_price}}
                                  </p>
                              </div>
                              <div class="product-properties">
                                  <div class="left-details">
                                    <i class="fa fa-arrow-circle-o-down"></i> 
                                  </div>
                                  <div class="left-details">
                                    <i class="fa fa-shopping-cart"></i>
                                    </div>  
                              </div>
                            </div>
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
      <div class="box-title">
        <h3>Types Of Books</h3>
      </div>
    </div>
  </div>
            
<div class="row">
  <div class="col-md-12 book-type">
    <div class="col-md-2 sep">
      <div class="image-hover img-layer-image-hover-backgroundchange">
         <img src="{{asset('frontend/image/book1.jpg')}}" style="border-radius: 100%" >
      <div class="layer"></div>
      <div class="category-centered"><b>Books</b></div>
      </div>
    </div>
    <div class="col-md-2 sep">
      <div class="image-hover img-layer-image-hover-backgroundchange ">
         <img src="{{asset('frontend/image/book1.jpg')}}" >
      <div class="layer"></div>
      <div class="category-centered"><b>Magazines</b></div>
      </div>
    </div>
    <div class="col-md-2 sep">
      <div class="image-hover img-layer-image-hover-backgroundchange">
         <img src="{{asset('frontend/image/book1.jpg')}}" >
      <div class="layer"></div>
      <div class="category-centered"><b>Documents</b></div>
      </div>
    </div>
   <div class="col-md-2 sep">
      <div class="image-hover img-layer-image-hover-backgroundchange">
         <img src="{{asset('frontend/image/book1.jpg')}}" >
      <div class="layer"></div>
      <div class="category-centered"><b>Audio books</b></div>
      </div>
    </div>
  </div>
</div>


  <div class="row">
    <div class="col-md-12">
      <div class="box-title">
        <h3>Services that We Provide</h3>
      </div>
    </div>
  </div>
      <div class="row">
        <div class="col-md-12">
          <div class="publish-box">
            <img src="{{asset('1558432923.jpg')}}" class="publish-img">
            <div class="publish-details">
            <h2>Publish books</h2>
            <span><p class="publish-para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p></span>
            <a href="{{route('publish.create')}}"><button class="btn btn-success publish-btn">Publish Now</button></a>
            </div>
          </div>
        </div>
      </div>
       <div class="row">
        <div class="col-md-12">
          <div class="ebook-box">
            <img src="{{asset('frontend/image/ebook1.jpg')}}" class="ebook-img">
            <div class="ebook-details">
            <h2>Ebooks</h2>
            <span><p class="ebook-para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p></span>
            <button class="btn btn-success ebook-btn">Read</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="buy-box">
            <img src="{{asset('frontend/image/book1.jpg')}}" class="buy-img">
            <div class="buy-details">
            <h2>Purchase Books Online</h2>
            <span><p class="buy-para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p></span>
            <button class="btn btn-success buy-btn">Shop Now</button>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-12">
          <div class="category-title">
            <h3>Top Categories</h3>
          </div>

        @foreach($categories as $category)
          <div class="category-details">
          <div class="col-md-3">
            <div class="img-hover-zoom img-hover-zoom--blur">
            @if(file_exists(public_path().'/'.env('CATEGORY_IMAGE_PATH').$category->image) && $category->image)
            <img src="{{ asset(env('CATEGORY_IMAGE_PATH').$category->image)}}" alt="Book Cover" class="category-img">
              @else
              <img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" alt="profile pic" class=" category-img" >
              @endif 
              <div class="category-centered"><b>{{$category->category_name}}</b></div>
            </div>
          </div>
        </div>
        @endforeach
        </div>
      </div>

    <section class="testimonials">
      <div class="row">
        <div class="col-sm-12">
          <div class="category-title">
            <h3>Testimonials</h3>
          </div>
          <div id="customers-testimonials" class="owl-carousel">
             @foreach($testimonials as $testimonial)
            <div class="item">
              <div class="shadow-effect">
                  @if(file_exists(public_path().'/'.env('TESTIMONIAL_IMAGE_PATH').$testimonial->image) && $testimonial->image)
                  <img src="{{ asset(env('TESTIMONIAL_IMAGE_PATH').$testimonial->image)}}" alt="Book Cover" class="img-circle">
                  @else
                  <img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" alt="profile pic" class="img-circle" >
                   @endif
                <p>{!! $testimonial->description !!}</p>
              </div>
              <div class="testimonial-name">{{$testimonial->author_name}}</div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
     </div>
@stop
