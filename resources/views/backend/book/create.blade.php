@extends('backend.layouts.master')
@section('content')

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="icon-placeholder mdi mdi-book-open "></i></span> Create Book
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="container  pull-up">
            <div class="row">
                <div class="col-lg-12">

                    <!--widget card begin-->
                    <form role="form" action="{{ route('book.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="card m-b-30">
                        <div class="card-header">
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label>Book Name</label>
                                    <input type="text" name="book_name" class="form-control" placeholder="Book Name">
                                    <div class="text-danger">{{ $errors->first('book_name') }}</div>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label>Book Category</label>
                                    <input type="text" name="category" class="form-control" placeholder="Category">
                                    <div class="text-danger">{{ $errors->first('category') }}</div>
                                  </div>
                               
                                  
                                <div class="form-group col-md-6">
                                    <label>Author Name</label>
                                    <input type="text" name="author_name" class="form-control" placeholder="Author Name">
                                    <div class="text-danger">{{ $errors->first('author_name') }}</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Book Price</label>
                                    <input type="text" name="book_price" class="form-control" placeholder="Book Price">
                                    <div class="text-danger">{{ $errors->first('book_price') }}</div>
                                </div>
               
                                
                              
                                <div class="form-group col-md-6">
                                    <label>Number of Pages</label>
                                    <input type="text" name="pages" class="form-control" placeholder="Number of Pages">
                                    <div class="text-danger">{{ $errors->first('pages') }}</div>
                                </div>
                     <div class="form-group col-md-6">
                                    <label>Books Available</label>
                                    <input type="text" name="book_available" class="form-control" placeholder="Books Available">
                                    <div class="text-danger">{{ $errors->first('book_available') }}</div>
                                </div>
                                 <div class="form-group col-md-6">
                                    <label>Type</label>
                                    <input type="text" name="type" class="form-control" placeholder="Type of Book">
                                    <div class="text-danger">{{ $errors->first('type') }}</div>
                                </div>
                                <div class="form-group col-md-6">
                                  <label>Status</label><br>
                                    <label class="radio-inline">Available
                                      </label>
                                      <input class="col-md-2" type="radio" name="status" value="available" >
                                      <label class="radio-inline">Soldout</label>
                                      <input class="col-md-2" type="radio" name="status" value="soldout">
                                </div>
                      
                                <div class="form-group col-md-6">
                                    <div>File</div>
                                      <div class="upload-btn-wrapper">
                                        <button class="upload-btn">Upload a file</button>
                                        <input type="file" name="file" />
                                      </div>
                                    <div class="text-danger">{{ $errors->first('file') }}</div>
                                </div>

                                <div class="form-group col-md-6">
                                      <div>Image</div>
                                      <div class="upload-btn-wrapper">
                                        <button class="upload-btn">Upload a file</button>
                                        <input type="file" name="book_image" />
                                      </div>
                                      <div class="text-danger">{{ $errors->first('book_image') }}</div>
                                  </div>

                                  <div class="form-group col-md-12">
                                    <label>Descriptions</label>
                                    <textarea name="description" class="form-control" 
                                              placeholder="    Write Book Description here"></textarea>
                                    <div class="text-danger">{{ $errors->first('description') }}</div>
                                </div> 
                    
                            </div>
                          </div>
                      </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{route('book.index')}}" class="button
                            btn btn-danger">Back</a>
                        </div>
                        </form>
                        
                      </div>
                    </div>
                  </div>
@endsection