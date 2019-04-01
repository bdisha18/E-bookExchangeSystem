
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
                                <i class="mdi mdi-table "></i></span>Emails
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
                          <a href="{{route('email.create')}}">
                            <button class="btn btn-success" style="float: right;"> <i class="fa fa-plus"></i> Add New Emails</button>
                          </a>
                          <form action="{{route('email.index')}}" method="get">
                            <input name="search" type="text" placeholder="Search.." >                   
                            <button type="submit"><i class="mdi mdi-magnify"></i></button>
                          </form>
                          
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
                                        <td>{{Member::where('user_id',$email->user_id)->value('username')}}</td>
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