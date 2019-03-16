@extends('backend.layouts.master')
@section('content')

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-table "></i></span> Publisher Details
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
                                    <label>Book Name</label>
                                    <input type="text" name="book_name" class="form-control" value="{{$publisher->book_name}}" placeholder="Book Name">
                                    <div class="text-danger">{{ $errors->first('book_name') }}</div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label></label>
                                    <input type="text" class="form-control" name="author_name" value="{{Book::where('book_id', $publisher->book_id)->value('author_name')}}" placeholder="Author Name">
                                    <div class="text-danger">{{ $errors->first('author_name') }}</div>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Cover Image</label>
                                    <input type="file" name="image" class="form-control" placeholder="Image" value="{{$publisher->image}}">
                                    <div class="text-danger">{{ $errors->first('image') }}</div>
                                </div>
                            
                                <div class="form-group col-md-4">
                                  <label>Status</label><br>
                                    <label class="radio-inline">Active
                                      </label>
                                      <input class="col-md-2" type="radio" name="status" value="active" {{($user->status == 'active')? 'checked' : ''}}>
                                      <label class="radio-inline">Inactive</label>
                                      <input class="col-md-2" type="radio" name="status" value="inactive" {{($user->status == 'inactive')? 'checked' : ''}}>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>File</label>
                                    <input type="file" name="file" class="form-control" placeholder="File" value="{{Book::where('book_id', $publisher->book_id)->value('file')}}">
                                    <div class="text-danger">{{ $errors->first('file') }}</div>
                                </div>

                            </div>
                            <div class="row">
                            	<div class="form-group col-md-12">
                                    <label>Description</label>
                                    <textarea type="text" name="description" class="form-control" value="{{Book::where('book_id', $publisher->book_id)->value('description')}}" placeholder="Description"></textarea>
                                    <div class="text-danger">{{ $errors->first('description') }}</div>
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