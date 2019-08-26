
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
                                <i class="icon-placeholder mdi mdi-gift"></i></span>Offers
                        </h4>
                        <div class="form-dark">
                            <div class="input-group input-group-flush mb-3">
                              <form action="{{route('offer.index')}}" method="get">
                                <input placeholder="Search Offers" type="search" name="search" 
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
                          <a href="{{route('offer.create')}}">
                            <button class="btn btn-success" style="float: right;"> <i class="fa fa-plus"></i> Add New Offers</button>
                          </a>
                          
                          
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(count($offers))
                                <table class="table table-hover ">
                                    <thead>
                                      <tr>
                                        <th>Sr.No.</th>
                                          <th>Offer Title</th>
                                          <th>Image</th>
                                          <th>Discount</th>
                                          <th>Start Date</th>
                                          <th>End Date</th>
                                          <th>Status</th>
                                          <th>Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @php
                                      $i =1;
                                      @endphp
                                      @foreach($offers as $offer)
                                      <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{ucwords($offer->offer_title)}}</td>
                                        <td>{{$offer->discount_amount}}</td>
                                         @if(file_exists(public_path().'/'.env('OFFER_IMAGE_PATH').$offer->offer_image) && $offer->offer_image)
                                        <td><img src="{{ asset(env('OFFER_IMAGE_PATH').$offer->offer_image)}}" class="image" height="50px" width="60"></td>
                                        @else
                                        <td><img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" class="image" height="60px"></td>
                                        @endif
                                        
                                        <td>{{date('d M Y', strtotime($offer->start_date))}}</td>     
                                        <td>{{date('d M Y', strtotime($offer->end_date))}}</td>     
                                        <td><label class="switch">
                                            <input type="checkbox" name="status" class="update-status"  data-id="{{$offer->offer_id}}" data-url="{{ route('offer.status', $offer->offer_id) }}" {{($offer->status == 'active')? 'checked' : ''}}>
                                            <span class="slider round"></span></label>
                                        </td>

                                        <td> 
                                              {!! Form::open(['method'=>'DELETE', 'route'=>['offer.delete',
                                                      $offer->offer_id]]) !!}
                                              <a href="{{ route('offer.view',$offer->offer_id) }}"><button type="button" title="view" class="btn btn-success btn-xs"><span class="mdi mdi-eye"></span></button></a> 
                                                                      
                                               <a href="{{ route('offer.edit',$offer->offer_id) }}"><button type="button" title="edit" class="btn btn-primary btn-xs"><span class="mdi mdi-launch"></span></button></a>

                                               <button  title="Delete" type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this user?');"><span class="mdi mdi-delete"></span></button>
                                               {!! Form::close() !!}
                                        </td>
                                        
                                      </tr>
                                      @endforeach
                                    </table>
                                     @else
                                    <div><h2>No Offers Found.</h2></div>
                                     @endif
                                  </div>

                            <!-- /.box-body -->
                          </div>
                          <!-- /.box -->
                        </div>
                      </div>
                    </section>
                  @endsection