@extends('backend.layouts.master')
@section('content')

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-table "></i></span> Create Publisher
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="container  pull-up">
            <div class="row">
                <div class="col-lg-12">

                    <!--widget card begin-->
                    <form role="form" action="{{ route('publisher.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="card m-b-30">
                        <div class="card-header">
                              <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Publisher Name</label>
                                    <input type="text" name="publisher_name" class="form-control" placeholder="Publisher Name">
                                    <div class="text-danger">{{ $errors->first('publisher_name') }}</div>
                                </div>
                    <div class="form-group col-md-4">
                                    <label>Book Name</label>
                                    <input type="text" name="book_name" class="form-control" placeholder="Book Name">
                                    <div class="text-danger">{{ $errors->first('book_name') }}</div>
                                </div>
                    <div class="form-group col-md-4">
                                    <label>Author Name</label>
                                    <input type="text" name="author_name" class="form-control" placeholder="Author Name">
                                    <div class="text-danger">{{ $errors->first('author_name') }}</div>
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