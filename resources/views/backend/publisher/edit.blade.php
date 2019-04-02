@extends('backend.layouts.master')
@section('content')
@php
use App\Model\Book;
@endphp

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-launch "></i></span> Publisher Details
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="container  pull-up">
            <div class="row">
                <div class="col-lg-12">

                    <!--widget card begin-->
                    <form role="form" action="{{ route('publisher.update',$publisher->publisher_id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="card m-b-30">
                        <div class="card-header">
                              <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Publisher Name</label>
                                    <input type="text" name="publisher_name" class="form-control" value="{{$publisher->publisher_name}}" placeholder="Publisher Name">
                                    <div class="text-danger">{{ $errors->first('publisher_name') }}</div>
                                </div>
                                  <div class="form-group col-md-4">
                                    <label>No.of Books Published</label>
                                    <input type="text" name="books_published" class="form-control" value="{{$publisher->books_published}}" placeholder="Number of books published ">
                                    <div class="text-danger">{{ $errors->first('books_published') }}</div>
                                </div>
                             <div class="form-group col-md-4">
                                    <label>Books Name</label>
                                    <input type="text" name="publish_bookname" class="form-control" value="{{$publisher->publish_bookname}}" placeholder="Published Books Name">
                                    <div class="text-danger">{{ $errors->first('publish_bookname') }}</div>
                                </div>
 
                            </div>
                          </div>
                      </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{route('publisher.index')}}" class="button
                            btn btn-danger">Back</a>
                        </div>
                        </form>
                        
                      </div>
                    </div>
                  </div>
@endsection