
@extends('backend.layouts.master')
@section('content')
<!-- /.row -->
@php
use App\Model\Member;
use App\Model\Category;
@endphp
<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="icon-placeholder mdi mdi-book-multiple "></i></span> Published Documents
                        </h4>

                        <div class="form-dark">
                            <div class="input-group input-group-flush mb-3">
                              <form action="{{route('publisher.index')}}" method="get">
                                <input placeholder="Search Publishers" type="search" name="search" 
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
                          <a href="{{route('publisher.create')}}">
                            <button class="btn btn-success" style="float: right;"> <i class="fa fa-plus"></i> Add New Document</button>
                          </a>
                          
                          
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(count($publishers))
                                <table class="table table-hover ">
                                    <thead>
                                      <tr>
                                        <th>Sr.No.</th>
                                          <th>Publisher Name</th>
                                          <th>Title</th>
                                          <th>Category</th>
                                          <th>File Name</th>
                                          <th>Status</th>
                                          <th>Created At</th>
                                          <th>Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @php
                                      $i =1;
                                      @endphp
                                      @foreach($publishers as $publisher)
                                      <tr>
                                        <td>{{$i++}}</td>
                                        @if($publisher->user_id)
                                        <td>{{ucwords(Member::where('user_id', $publisher->user_id)->value('fname'))}} {{ucwords(Member::where('user_id', $publisher->user_id)->value('lname'))}}</td>
                                        @else
                                        <td>admin</td>
                                        @endif
                                        <td>{{$publisher->title}}</td>
                                        <td>{{Category::where('id', $publisher->category_id)->value('category_name')}}</td>
                                        <td>{{$publisher->file}}</td>
                                        <td><label class="switch">
                                            <input type="checkbox" name="status" class="update-status"  data-id="{{$publisher->id}}" 
                                                   data-url="{{ route('publisher.status', $publisher->id) }}" {{($publisher->status == 'available')? 'checked' : ''}}>
                                            <span class="slider round"></span></label>
                                        </td>
                                        <td>{{date('d M Y', strtotime($publisher->created_at))}}</td>

                                        <td> 
                                              {!! Form::open(['method'=>'DELETE', 'route'=>['publisher.delete',
                                                      $publisher->offer_id]]) !!}
                                              <a href="{{ route('publisher.view',$publisher->id) }}"><button type="button" title="view" class="btn btn-success btn-xs"><span class="mdi mdi-eye"></span></button></a> 
                                                                      
                                               <a href="{{ route('publisher.edit',$publisher->id) }}"><button type="button" title="edit" class="btn btn-primary btn-xs"><span class="mdi mdi-launch"></span></button></a>

                                               <button  title="Delete" type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this user?');"><span class="mdi mdi-delete"></span></button>
                                               {!! Form::close() !!}
                                        </td>
                                        
                                      </tr>
                                      @endforeach
                                    </table>
                                     @else
                                    <div><h2>No Published Document Found.</h2></div>
                                     @endif
                                  </div>

                            <!-- /.box-body -->
                          </div>
                          <!-- /.box -->
                        </div>
                      </div>
                    </section>
                  @endsection