
@extends('backend.layouts.master')
@section('content')


<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="fa icon-placeholder mdi mdi-gmail"></i></span>Contacts
                        </h4>
                        <div class="form-dark">
                            <div class="input-group input-group-flush mb-3">
                              <form action="{{route('contact.index')}}" method="get">
                                <input placeholder="Search Contacts" type="search" name="search" 
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
                                @if(count($contacts))
                                <table class="table table-hover ">
                                    <thead>
                                      <tr>
                                        <th>Sr.No.</th>
                                          <th>Username</th>
                                          <th>Email</th>
                                          <th>Message</th>
                                          <th>created_at</th>
                                          <th>Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @php
                                      $i =1;
                                      @endphp
                                      @foreach($contacts as $contact)
                                      <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{ucwords($contact->name)}}</td>
                                        </td>
                                        <td>{{$contact->email}}</td>
                                        </td>
                                        <td>{{str_limit($contact->message, 70)}}</td>
                                        <td>{{$contact->created_at}}</td>
                                        <td> 
                                              {!! Form::open(['method'=>'DELETE', 'route'=>['contact.delete',
                                                      $contact->id]]) !!}
                                              <a href="{{ route('contact.view',$contact->id) }}"><button type="button" title="view" class="btn btn-success btn-xs"><span class="mdi mdi-eye"></span></button></a> 
                                            <button  title="Delete" type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this user?');"><span class="mdi mdi-delete"></span></button>
                                               {!! Form::close() !!}
                                        </td>
                                        
                                      </tr>
                                      @endforeach
                                    </table>
                                     @else
                                    <div><h2>No Contact Found.</h2></div>
                                     @endif
                                  </div>

                            <!-- /.box-body -->
                          </div>
                          <!-- /.box -->
                        </div>
                      </div>
                    </section>
                  @endsection