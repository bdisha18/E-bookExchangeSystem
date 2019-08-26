@extends('frontend.layout.master')
@section('content')
<div class="row">
  <div class="col-md-12">
  <div class="col-md-4">
    <div class="example-2 card1">
      <div class="wrapper1">
        <div class="header1">
          <ul class="menu-content">
            <li><a href="#" class="fa fa-heart-o"></a></li>
            <li><a href="#" class="fa fa-arrow-down"></a></li>
          </ul>
        </div>
          @if(file_exists(public_path().'/'.env('BOOK_IMAGE_PATH').$product->book_image) && $product->book_image)
          <img src="{{ asset(env('BOOK_IMAGE_PATH').$product->book_image)}}" alt="Book Cover" >
          @else
          <img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" alt="profile pic"  >
          @endif 
        <div class="data1">
          <div class="content1">
            <h1 class="title1"><a href="#">{{$product->book_name}}</a></h1>
            <p class="text1">{{$product->description}}.</p>
            <a href="#" class="button1">Read more</a>
          </div>
        </div>
      </div>
    </div>
     <div><a href="#" class="btn-book-image">Read Book</a></div>
  </div>
  <div class="col-md-5">
    <div class="product-wrapper">
      <div class="product-header">
      <h2>{{$product->book_name}}</h2><span>- Dec 2015</span>
      </div>
      <p>By {{$product->author_name}}</p>
      <span class="product-rating list-rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star grey"></i>
      </span>
        <div class="product-price">
          <i class="fa fa-file-text file"> {{$product->pages}} Pages</i>
          <i class="fa fa-clock-o"> 7 Hours</i>
        </div>
        <div class="product-tax">
        <p class="price">Rs {{$product->book_price}}</p>
        <p>Inclusive of all Taxes</p>
        </div>
        <div class="book-details">
        <h4>About Book</h4>
        <div class="col-md-3 table-topic">
        <p>Publisher :</p>
        <p>Format :</p>
        </div>
        <div class="col-md-3 table-value">
          <p>nbfgndn</p>
          <p>fvdvdfavfdvfdv</p>
        </div>
        <div class="col-md-3 table-topic">
          <p>Released :</p>
        </div>
        <div class="col-md-3 table-value">
          <p>fvdfbsreber</p>
        </div>
      </div>
      </div>
    </div>

<div class="col-md-3 heading-product-summary">
  <h3>Product Summary</h3>
    <hr class="product-line">
    
  
    <h4>{{$product->book_name}}</h4>
  <div class="product-cf">
    <ul>
      <li><b> Rs {{$product->book_price}}</b></li>
      
          <li>Inclusive All of Taxes</li>
      
            <li class="product-free"><i class="fa fa-cube"></i><span>FREE Delivery</span><span>Orders Over Rs 545</span></li>
            <li><h4>In Stock</h4></li>
        <li>Quantity:
        <span>
          <select>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
          </select>
        </span></li>
           
      <li><a href="#" class="btn-cart">Add To Cart</a></li>
    </ul>
    <div class="footer-summary">
        <hr>
        <p><i class="fa fa-map-marker"><span>Deliver To disha - agra 283203</span></i></p>
  </div>
</div>
</div>
</div>
</div>
@if(isset($similar_products))
<div class="row">
          <div class="col-md-12 similar-product">
            <hr>
            <h2>Similar Items</h2>
            <div class="row mx-auto my-auto">
              <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">

                    @foreach($similar_products as $book)
                    @if($loop->first)
                <div class="carousel-item active">
                  @else
                  <div class="carousel-item">
                  @endif
                        <div class="col-md-3">
                          <div class="card">
                            <div class="card-head">
                              @if(file_exists(public_path().'/'.env('BOOK_IMAGE_PATH').$book->book_image) && $book->book_image)
                              <img src="{{ asset(env('BOOK_IMAGE_PATH').$book->book_image)}}" alt="Book Cover" class="card-logo img-responsive">
                              @else
                              <img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" alt="profile pic" class="card-logo img-responsive" >
                              @endif 
                              <i class="fa fa-heart product-img"></i>
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
@endif
@if(isset($author_products))
<div class="row">
          <div class="col-md-12 similar-product">
            <h2>Read More From dcfvfev</h2>
            <div class="row mx-auto my-auto">
              <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">

                    @foreach($author_products as $book)
                    @if($loop->first)
                <div class="carousel-item active">
                  @else
                  <div class="carousel-item">
                  @endif
                        <div class="col-md-3">
                          <div class="card">
                            <div class="card-head">
                              @if(file_exists(public_path().'/'.env('BOOK_IMAGE_PATH').$book->book_image) && $book->book_image)
                              <img src="{{ asset(env('BOOK_IMAGE_PATH').$book->book_image)}}" alt="Book Cover" class="card-logo img-responsive">
                              @else
                              <img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" alt="profile pic" class="card-logo img-responsive" >
                              @endif 
                              <i class="fa fa-heart product-img"></i>
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
@endif
  </div>
@stop