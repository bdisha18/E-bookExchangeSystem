
@extends('backend.layouts.master')
@section('content')
@php
use App\Model\Publisher;
@endphp
<!-- /.row -->

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-table "></i></span> Order Details
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
                          <a href="{{route('book.create')}}">
                            <button class="btn btn-success" style="float: right;"> <i class="fa fa-plus"></i> Add New Books</button>
                          </a>
                          <form action="{{route('book.index')}}" method="get">
                            <input name="search" type="text" placeholder="Search.." >                   
                            <button type="submit"><i class="fa fa-search"></i></button>
                          </form>
                          
                        </div>
         
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(count($books))
                                <table class="table table-hover ">
                                    <thead>
                                      <tr>
                                        <th>Sr.No.</th>
                                          <th>Book Name</th>
                                          <th>Cover Image</th>
                                           <th>Price</th>
                                          <th>Author Name</th>
                                          <th>Publisher Name</th>
                                          <th>Rating</th>
                                         <th>Status</th>
                                         <th>Type</th>
                                          <th>Released Date</th>
                                        
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @php
                                      $i =1;
                                      @endphp
                                      @foreach($books as $book)
                                      <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{ucwords($book->book_name)}}</td>
                                        @if(file_exists(public_path().'/'.env('BOOK_IMAGE_PATH').$book->image) && $book->image)
                                        <td><img src="{{ asset(env('BOOK_IMAGE_PATH').$publisher->image)}}" alt="Book Cover" class="image" height="50px" width="60"></td>
                                        @else
                                        <td><img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" alt="profile pic" class="image" height="60px"></td>
                                        @endif 
                                        
                                        <td>{{$book->book_price}}</td>
                                        <td>{{$book->author_name}}</td>
                                        <td>{{Publisher::where('book_id', $book->book_id)->value('publisher_name')}}</td>
                                        <td>{{$book->rating}}</td>
                                        <td><label class="switch">
                                            <input type="checkbox" name="status" class="update-status"  data-id="{{$book->book_id}}" 
                                                   data-url="{{ route('book.status', $book->book_id) }}" {{($book->status == 'active')? 'checked' : ''}}>
                                            <span class="slider round"></span></label>
                                        </td>
                                        <td>{{$book->category}}</td>
                                        <td>{{$book->created_at}}</td>

                                    
                                        
                                      </tr>
                                      @endforeach
                                    </table>
                                     @else
                                    <div><h2>No Book Found.</h2></div>
                                     @endif
                                  </div>

                            <!-- /.box-body -->
                          </div>
                          <!-- /.box -->
                        </div>
                      </div>
                    </section>
                  @endsection