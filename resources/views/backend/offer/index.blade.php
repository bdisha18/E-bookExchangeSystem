
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
                                <i class="mdi mdi-table "></i></span>Offers
                        </h4>


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
                          <form action="{{route('offer.index')}}" method="get">
                            <input name="search" type="text" placeholder="Search.." >                   
                            <button type="submit"><i class="fa fa-search"></i></button>
                          </form>
                          
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(count($offers))
                                <table class="table table-hover ">
                                    <thead>
                                      <tr>
                                        <th>Sr.No.</th>
                                          <th>Offer Title</th>
                                          <th>Offer Description</th>
                                          
                                          <th>Start Date</th>
                                          <th>End Date</th>
                                          <th>Discount</th>
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
                                        </td>
                                        <td>{{$offer->offer_description}}</td>
                                        </td>
                                    
                                        <td>{{$offer->start_date}}</td>
                                        <td>{{$offer->end_date}}</td>
                                        <td>{{$offer->discount_amount}}</td>
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