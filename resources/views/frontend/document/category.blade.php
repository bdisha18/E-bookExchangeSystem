@extends('frontend.layout.master')
@section('content')
@php
use App\Model\Member;
@endphp
<div class="row">
    <div class="col-md-12">
      <div class="category-title">
        <h1>Documents</h1>
        	<span><hr><p>VIEW ALL</p></span>
      </div>
    </div>
</div>
<div class="row">
  	<div class="col-md-12 magazine-bg-image">
  		<img src="{{asset('frontend/image/magazine1.jpg')}}">
  	</div>
  </div>
  @foreach($documents as $category)
  <?php 
if(!count($category['document'])){
continue;
}
   ?>
  <div class="row">
    <div class="col-md-12">
      <div class="category-title">
        <h1>{{$category['category']->category_name}}</h1>
        	<span><hr><p>VIEW ALL</p></span>
      </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
      <div class="row mx-auto my-auto">
      <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
          <div class="carousel-inner w-100" role="listbox">
				@foreach($category['document'] as $document)
                @if($loop->first)
                  <div class="carousel-item active">
                    @else
                    <div class="carousel-item">
                    @endif
                      <div class="magazine-card">
                       <div class="magazine-header">
                          @if(file_exists(public_path().'/'.env('PUBLISHED_IMAGE_PATH').$document->file) && $document->file)
				         <img src="{{ asset(env('PUBLISHED_IMAGE_PATH').$document->file)}}"  height='1000'  width='500'>
				         @else
				         <img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" >
				         @endif 
                          <div class="magazine-icon">
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                          </div>
                       </div>
                       <div class="magazine-text">
                          <h3 class="magazine-food">
                             {{str_limit(ucwords($document->title), 10)}}
                          </h3>
                          <p class="magazine-info">By: {{$document->getMember->fname . " " . $document->getMember->lname}}</p>
                       </div>
                       <a href="#" class="magazine-btn">Let's Read!</a>
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