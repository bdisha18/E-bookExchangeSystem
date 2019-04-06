
@extends('backend.layouts.master')
@section('content')
<?php
use App\Model\Rating;
?>


<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-eye "></i></span> Order Details
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
                          
                          
                        </div>
         
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                <table class="table table-hover ">
                                    <thead>
                                      <tr>
                                        <th>Sr.No.</th>
                                          <th>Book Name</th>
                                          <th>Cover Image</th>
                                          <th>Price</th>
                                          <th>Author Name</th>
                                          <th>Rating</th>
                                          <th>Created At</th>
                                        
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @php
                                      $i =1;
                                      @endphp
                       
                                      @foreach($orders as $book)
                                    
                                      
                                      <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{ucwords($book->book_name)}}</td>
                                        @if(file_exists(public_path().'/'.env('BOOK_IMAGE_PATH').$book->book_image) && $book->book_image)
                                        <td><img src="{{ asset(env('BOOK_IMAGE_PATH').$book->book_image)}}" alt="Book Cover" class="image" height="50px" width="60"></td>
                                        @else
                                        <td><img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" alt="profile pic" class="image" height="60px"></td>
                                        @endif 
                                        
                                        <td>{{$book->book_price}}</td>
                                        <td>{{$book->author_name}}</td>
                                        <td>{{Rating::where('book_id',$book->book_id)->value('rating')}}</td>
                                        <td>{{$book->created_at}}</td>

                                    
                                        
                                      </tr>
                                      @endforeach
                                    </table>
                                    
                                  </div>

                            <!-- /.box-body -->
                          </div>
                          <!-- /.box -->
                        </div>
                      </div>
                    </section>
                  @endsection