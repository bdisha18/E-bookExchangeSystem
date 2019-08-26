@extends('backend.layouts.master')
@section('content')

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="icon-placeholder mdi mdi-book-multiple "></i></span> Create Publisher
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
                                 <div class="form-group col-md-6">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Title">
                                    <div class="text-danger">{{ $errors->first('title') }}</div>
                                </div>
                                 <div class="form-group col-md-6">
                                    <label>Category</label>
                                    <select class="form-control" name="category_id" value="{{old('category_id')}}">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">
                                        {{ucwords($category->category_name)}}
                                        </option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">{{ $errors->first('parent_id') }}</div>
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
                                  <label>Status</label><br>
                                    <label class="radio-inline">Active
                                      </label>
                                      <input class="col-md-2" type="radio" name="status" value="active" >
                                      <label class="radio-inline">Inactive</label>
                                      <input class="col-md-2" type="radio" name="status" value="inactive">
                                </div>
                                 <div class="form-group col-md-12">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control ckeditor" 
                                              placeholder="Description"></textarea>
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