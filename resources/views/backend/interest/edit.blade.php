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
                                <i class="mdi mdi-table "></i></span> Edit Interests
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="container  pull-up">
            <div class="row">
                <div class="col-lg-12">

                    <!--widget card begin-->
                    <form role="form" action="{{ route('interest.update',$interest->interest_id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="card m-b-30">
                        <div class="card-header">
                              <div class="form-row">
                                 <div class="form-group col-md-6">
                                    <label>Category</label>
                                    <select class="form-control" name="category_id">
                                        <option value="">None</option>
                                       @foreach($categories as $category)
                                       <option value="{{$category->id}}" {{($category->id == $interest->category_id)? 'selected' : ''}}> 
                                        {{ucwords($category->category_name)}}
                                      </option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">{{ $errors->first('category_id') }}</div>
                            </div>
                                  <div class="form-group col-md-6">
                                      <div>Select Image</div>
                                      <div class="upload-btn-wrapper">
                                        <button class="upload-btn">Upload a file</button>
                                        <input type="file" name="image" />
                                      </div>
                                      <div class="text-danger">{{ $errors->first('image') }}</div>
                                </div>                            
                            </div>
                          </div>
                      </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{route('interest.index')}}" class="button
                            btn btn-danger">Back</a>
                        </div>
                        </form>
                        
                      </div>
                    </div>
                  </div>
@endsection