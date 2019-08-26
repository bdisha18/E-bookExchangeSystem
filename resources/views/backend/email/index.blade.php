
@extends('backend.layouts.master')
@section('content')
@php
use App\Model\Member;
@endphp
<!-- /.row -->

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="fa icon-placeholder mdi mdi-gmail"></i></span>Emails
                        </h4>
                        <div class="form-dark">
                            <div class="input-group input-group-flush mb-3">
                              <form action="{{route('email.index')}}" method="get">
                                <input placeholder="Search Emails" type="search" name="search" 
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
                          <a href="{{route('email.create')}}">
                            <button class="btn btn-success" style="float: right;"> <i class="fa fa-plus"></i> Add New Emails</button>
                          </a>
                          
                          
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(count($emails))
                                <table class="table table-hover ">
                                    <thead>
                                      <tr>
                                        <th>Sr.No.</th>
                                          <th>Send to</th>
                                          <th>Username</th>
                                          
                                          <th>Subject</th>
                                          <th>created_at</th>
                                          
                                          <th>Status</th>
                                       

                                          <th>Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @php
                                      $i =1;
                                      @endphp
                                      @foreach($emails as $email)
                                      <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{ucwords($email->email_name)}}</td>
                                        </td>
                                        <td>{{Member::where('user_id',$email->user_id)->value('fname')}} {{Member::where('user_id',$email->user_id)->value('lname')}}</td>
                                        </td>
                                    
                                        <td>{{$email->subject}}</td>
                                        <td>{{$email->created_at}}</td>
                                        <td><label class="switch">
                                            <input type="checkbox" name="status" class="update-status"  data-id="{{$email->id}}" data-url="{{ route('email.status', $email->id) }}" {{($email->status == 'send')? 'checked' : ''}}>
                                            <span class="slider round"></span></label>
                                        </td>

                                        <td> 
                                              {!! Form::open(['method'=>'DELETE', 'route'=>['email.delete',
                                                      $email->id]]) !!}
                                              <a href="{{ route('email.view',$email->id) }}"><button type="button" title="view" class="btn btn-success btn-xs"><span class="mdi mdi-eye"></span></button></a> 
                                            <button  title="Delete" type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this user?');"><span class="mdi mdi-delete"></span></button>
                                               {!! Form::close() !!}
                                        </td>
                                        
                                      </tr>
                                      @endforeach
                                    </table>
                                     @else
                                    <div><h2>No Email Found.</h2></div>
                                     @endif
                                  </div>

                            <!-- /.box-body -->
                          </div>
                          <!-- /.box -->
                        </div>
                      </div>
                    </section>
                  @endsection