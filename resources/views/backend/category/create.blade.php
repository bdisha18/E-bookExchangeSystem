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
                                <i class="mdi mdi-table "></i></span> Create New Category
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
                                <div class="form-group col-md-4">
                                    <label>category Name</label>
                                    <input type="text" name="category_name" class="form-control" placeholder="Category Name">
                                    <div class="text-danger">{{ $errors->first('category_name') }}</div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Parent Category</label>
                                    <select class="form-control" name="parent_id" value="{{old('parent_id')}}">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">@if($category->parent_id == '' )
                                        {{ucwords($category->category_name)}}
                                        @else
                                        {{ucwords(Category::where('id', $category->parent_id)->value('category_name'))}}  > {{ucwords($category->category_name)}}
                                        @endif</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">{{ $errors->first('parent_id') }}</div>
                                </div>
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