@extends('frontend.layout.master')
@section('content')
@php
use App\Model\Category;
@endphp
<div class="row">
    <div class="col-md-12">
      <div class="category-title">
        <h1>MAGAZINES</h2>
        	<span><hr><p>FIND THE LATEST ISSUES</p></span>
      </div>
    </div>
  </div>
  <div class="row">
  	<div class="col-md-12 magazine-bg-image">
  		<img src="{{asset('frontend/image/magazine1.jpg')}}">
  	</div>
  </div>
@foreach($magazines as $category)
 <?php 
if(!count($category['magazine'])){
    continue;
  }
   ?>
  <div class="row">
    <div class="col-md-12">
      <div class="category-title">
        <h2>{{$category['category']->category_name}}</h2>
        	<span><hr><p>View All</p></span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="row mx-auto my-auto">
      <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
          <div class="carousel-inner w-100" role="listbox">
             @foreach($category['magazine'] as $magazine)
                @if($loop->first)
                  <div class="carousel-item active">
                    @else
                    <div class="carousel-item">
                    @endif
                      <div class="magazine-card">
                       <div class="magazine-header">
                           @if(file_exists(public_path().'/'.env('BOOK_IMAGE_PATH').$magazine->book_image) && $magazine->book_image)
                           <a href="{{route('product.index', $magazine->book_id)}}"><img src="{{ asset(env('BOOK_IMAGE_PATH').$magazine->book_image)}}" alt="Book Cover" ></a>
                           @else
                           <a><img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" alt="profile pic"></a>
                           @endif
                          <div class="magazine-icon">
                            <i class="fa fa-heart-o favorite favoriteIcon {{(in_array($magazine->book_id, $favorite_id))  ? 'active' : '' }}" data-id="{{$magazine->book_id}}" data-url="{{route('favorite.update', $magazine->book_id)}}">
                            @csrf
                            <input type="hidden" name="book_id" id="store-favorite"></i>
                          </div>
                       </div>
                       <div class="magazine-text">
                          <h3 class="magazine-food">
                             {{$magazine->book_name}}
                          </h3>
                          <p class="magazine-info">{{date('d M Y', strtotime($magazine->released_date))}}</p>
                       </div>
                       <a href="#" class="magazine-btn">Let's Buy!</a>
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
  @endforeach



</div>
@stop
        