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
                                <div class="form-group col-md-4">
                                    <label>Interest Title</label>
                                    <input type="text" name="name" class="form-control" value="{{$interest->name}}" placeholder="Interest Title">
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                </div>
                                 <div class="form-group col-md-4">
                                      <label>Image</label>
                                      <input type="file" name="image" class="form-control">
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