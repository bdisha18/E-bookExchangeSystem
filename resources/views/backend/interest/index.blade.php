
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
                                <i class="icon-placeholder mdi mdi-heart"></i></span> Interests
                        </h4>

                        <div class="form-dark">
                            <div class="input-group input-group-flush mb-3">
                              <form action="{{route('interest.index')}}" method="get">
                                <input placeholder="Search Interests" type="search" name="search" 
                                       class="form-control form-control-lg search form-control-prepended">
                              </form>
                              <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="mdi mdi-magnify"></i>
                                    </div>
                              </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="container pull-up">
            <div class="row">

                <div class="col-md-12">
                    <div class="card m-b-30">
                        <div class="card-header">
                          <a href="{{route('interest.create')}}">
                            <button class="btn btn-success" style="float: right;"> <i class="fa fa-plus"></i> Add New Interests</button>
                          </a>
                          
                          
                        </div>
         
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(count($interests))
                                <table class="table table-hover ">
                                    <thead>
                                      <tr>
                                        <th>Sr.No.</th>
                                          <th>Interest Category</th>
                                          <th>Image</th>
                                          <th>Created Date</th>
                                          <th>Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @php
                                      $i =1;
                                      @endphp
                                      @foreach($interests as $interest)
                                      <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{Category::where('id', $interest->category_id)->value('category_name')}}</td>
                                        @if(file_exists(public_path().'/'.env('INTEREST_IMAGE_PATH').$interest->image) && $interest->image)
                                        <td><img src="{{ asset(env('INTEREST_IMAGE_PATH').$interest->image)}}" alt="Book Cover" class="image" height="50px" width="60"></td>
                                        @else
                                        <td><img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" alt="profile pic" class="image" height="60px"></td>
                                        @endif 
                                        
                                        <td>{{$interest->created_at}}</td>
                                        <td> 
                                              {!! Form::open(['method'=>'DELETE', 'route'=>['interest.delete',
                                              $interest->interest_id]]) !!}
                                                                      
                                               <a href="{{ route('interest.edit',$interest->interest_id) }}"><button type="button" title="edit" class="btn btn-primary btn-xs"><span class="mdi mdi-launch"></span></button></a>

                                               <button  title="Delete" type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this user?');"><span class="mdi mdi-delete"></span></button>
                                               {!! Form::close() !!}
                                        </td>
                                        
                                      </tr>
                                      @endforeach
                                    </table>
                                     @else
                                    <div><h2>No interest Found.</h2></div>
                                     @endif
                                  </div>

                            <!-- /.box-body -->
                          </div>
                          <!-- /.box -->
                        </div>
                      </div>
                    </section>
                  @endsection