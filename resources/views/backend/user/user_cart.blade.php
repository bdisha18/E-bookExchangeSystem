
@extends('backend.layouts.master')
@section('content')
@php
use App\Model\Book;
use App\Model\Publisher;
@endphp

<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-cart "></i></span> Cart Detail
                        </h4>


                    </div>
                </div>
            </div>
        </div>
<div class="container pull-up">
            <div class="row">

                <div class="col-md-12">
                    <div class="card m-b-30">
                        <div class="card-header">
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label">Total Products : {{$cart->count()}} products</label>
                                </div>
                            </div>
                        
                          
                            
                          </div>
                        </div>
                        
                                 
                      <div class="card">
                        <div class="row">
                          @foreach($cart as $book)
                            <div class="col-md-4">
                        <div class="card-media">

                       
                           <img class="card-img-top" src="http://localhost/socialsite/public/image/testimonial/download.jpeg" style="width: 80%">
                        </div>
                        <div class="card-body text-white"
                             style="background-image: linear-gradient(-20deg, #2b5876 0%, #4e4376 100%); width: 80%;">
                            <h5 class="card-title">{{Book::where('book_id', $book->book_id)->value('book_name')}}</h5>
                            <span class="md md-star"></span>
                            <p class="card-text">{{Book::where('book_id', $book->book_id)->value('author_name')}}</p>
                            <a href="#" class="btn btn-light">Price: {{Book::where('book_id', $book->book_id)->value('book_price')}}</a>
                        </div>

                    </div>
                      @endforeach
                  </div>
                </div>
               

                </div>


                        </div>
                      </div>
                <a href="{{route('user.index')}}" class="button btn btn-danger">Back</a>

                        </div>
                      
                         <div class="col-md-12" style="margin-top: 30px; padding-left: 80%;">
                                <div class="form-group">
                                    <label class="label">Total Amount:</label>
                                    <p>{{$cart->sum('total_amount')}}</p>
                                </div>
                            </div>
                        
                       
                   
                     
                          

 

                

 @endsection
                  
                  