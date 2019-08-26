
@extends('backend.layouts.master')
@section('content')
<!-- /.row -->

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="icon-placeholder mdi mdi-chart-pie  "></i></span> Testimonial
                        </h4>

                        <div class="form-dark">
                            <div class="input-group input-group-flush mb-3">
                              <form action="{{route('testimonial.index')}}" method="get">
                                <input placeholder="Search Testimonials" type="search" name="search" 
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
                          <a href="{{route('testimonial.create')}}">
                            <button class="btn btn-success" style="float: right;"> <i class="fa fa-plus"></i> Add New Testimonial</button>
                          </a>
                          
                          
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(count($testimonials))
                                <table class="table table-hover ">
                                    <thead>
                                      <tr>
                                        <th>Sr.No.</th>
                                          <th>Image</th>
                                          <th>Author Name</th>
                                           <th>Created At</th>

                                          <th>Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @php
                                      $i =1;
                                      @endphp
                                      @foreach($testimonials as $testimonial)
                                      <tr>
                                        <td>{{$i++}}</td>
                                        @if(file_exists(public_path().'/'.env('TESTIMONIAL_IMAGE_PATH').$testimonial->image) && $testimonial->image)
                                        <td><img src="{{ asset(env('TESTIMONIAL_IMAGE_PATH').$testimonial->image)}}" alt="profile pic" class="testimonialImage" height="50px" width="60"></td>
                                        @else
                                        <td><img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" alt="testimonial pic" class="testimonialImage" height="60px"></td>
                                        @endif 
                                        <td>{{$testimonial->author_name}}</td>
                                    <td>{{date('d M Y', strtotime($testimonial->created_at))}}</td>     


                                        <td> 
                                              {!! Form::open(['method'=>'DELETE', 'route'=>['testimonial.delete',
                                                      $testimonial->offer_id]]) !!}
                                              <a href="{{ route('testimonial.view',$testimonial->id) }}"><button type="button" title="view" class="btn btn-success btn-xs"><span class="mdi mdi-eye"></span></button></a> 
                                                                      
                                               <a href="{{ route('testimonial.edit',$testimonial->id) }}"><button type="button" title="edit" class="btn btn-primary btn-xs"><span class="mdi mdi-launch"></span></button></a>

                                               <button  title="Delete" type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this user?');"><span class="mdi mdi-delete"></span></button>
                                               {!! Form::close() !!}
                                        </td>
                                        
                                      </tr>
                                      @endforeach
                                    </table>
                                     @else
                                    <div><h2>No Testimonial Found.</h2></div>
                                     @endif
                                  </div>

                            <!-- /.box-body -->
                          </div>
                          <!-- /.box -->
                        </div>
                      </div>
                    </section>
                  @endsection