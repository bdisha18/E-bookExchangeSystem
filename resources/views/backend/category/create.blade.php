@extends('backend.layouts.master')
@section('content')
@php 
use App\Model\Category;
@endphp

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="icon-placeholder mdi mdi-view-list "></i></span> Create New Category
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="container  pull-up">
            <div class="row">
                <div class="col-lg-12">

                    <!--widget card begin-->
                    <form role="form" action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="card m-b-30">
                        <div class="card-header">
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>category Name</label>
                                    <input type="text" name="category_name" class="form-control" placeholder="Category Name">
                                    <div class="text-danger">{{ $errors->first('category_name') }}</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Parent Category</label>
                                    <select class="form-control" name="parent_id" value="{{old('parent_id')}}">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            @if($category->parent_id == '' )
                                        <option value="{{$category->id}}">
                                        {{ucwords($category->category_name)}}
                                        
                                    </option>
                                        @endif
                                        @endforeach
                                    </select>
                                    <div class="text-danger">{{ $errors->first('parent_id') }}</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Type</label>
                                    <select class="form-control" name="type" value="{{old('type')}}">
                                        <option value="">Select Type</option>
                                        <option value="document">Documents</option>
                                        <option value="book">Books</option>
                                    </select>
                                    <div class="text-danger">{{ $errors->first('type') }}</div>
                                </div>
                                <div class="form-group col-md-6">
                                      <div>Image</div>
                                      <div class="upload-btn-wrapper">
                                        <button class="upload-btn">Upload a file</button>
                                        <input type="file" name="image" />
                                      </div>
                                      <div class="text-danger">{{ $errors->first('image') }}</div>
                                  </div>
                             <div class="form-group col-md-6">
                                    <label>Descriptions</label>
                                    <textarea name="description" class="form-control" 
                                              placeholder="Write Description here"></textarea>
                                    <div class="text-danger">{{ $errors->first('description') }}</div>
                                </div>
                            </div>

      
                            </div>
                          </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{route('category.index')}}" class="button
                            btn btn-danger">Back</a>
                        </div>
                        </form>
                        
                      </div>
                    </div>
                  </div>
@endsection