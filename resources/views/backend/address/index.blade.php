
@extends('backend.layouts.master')
@section('content')
@php
use App\Model\Member;
@endphp

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="icon-placeholder mdi mdi-map-marker  "></i></span>Address
                        </h4>
                        <div class="form-dark">
                            <div class="input-group input-group-flush mb-3">
                              <form action="{{route('address.index')}}" method="get">
                                <input placeholder="Search Addresses" type="search" name="search" 
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
                          
                          
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(count($addresses))
                                <table class="table table-hover ">
                                    <thead>
                                      <tr>
                                        <th>Sr.No.</th>
                                          <th>Username</th>
                                          <th>Email</th>
                                          <th>City</th>
                                          <th>State</th>
                                          <th>Country</th>
                                          <th>Created at</th>
                                          <th>Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @php
                                      $i =1;
                                      @endphp
                                      @foreach($addresses as $address)
                                      <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{ucwords(Member::where('user_id', $address->user_id)->value('fname'))}} {{ucwords(Member::where('user_id', $address->user_id)->value('lname'))}}</td>
                                         <td>{{ucwords(Member::where('user_id', $address->user_id)->value('email'))}}</td>
                                        <td>{{$address->city}}</td>
                                        <td>{{$address->state}}</td>
                                        <td>{{$address->country}}</td>
                                        <td>{{$address->created_at}}</td>

                                        <td> 
                                              {!! Form::open(['method'=>'DELETE', 'route'=>['address.delete',
                                                      $address->id]]) !!}
                                              <a href="{{ route('address.view',$address->id) }}"><button type="button" title="view" class="btn btn-success btn-xs"><span class="mdi mdi-eye"></span></button></a> 
                                               <a href="{{ route('address.edit',$address->id) }}"><button type="button" title="edit" class="btn btn-primary btn-xs"><span class="mdi mdi-launch"></span></button></a>
                                            <button  title="Delete" type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this user?');"><span class="mdi mdi-delete"></span></button>
                                               {!! Form::close() !!}
                                        </td>
                                        
                                      </tr>
                                      @endforeach
                                    </table>
                                     @else
                                    <div><h2>No Address Found.</h2></div>
                                     @endif
                                  </div>

                            <!-- /.box-body -->
                          </div>
                          <!-- /.box -->
                        </div>
                      </div>
                    </section>
                  @endsection