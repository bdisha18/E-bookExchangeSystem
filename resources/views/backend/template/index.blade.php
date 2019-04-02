
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
                                <i class="icon-placeholder mdi mdi-mailbox-open-outline"></i></span>Email Templates
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
                          <a href="{{route('template.create')}}">
                            <button class="btn btn-success" style="float: right;"> <i class="fa fa-plus"></i> Add New Email Template</button>
                          </a>
                          <form action="{{route('template.index')}}" method="get">
                            <input name="search" type="text" placeholder="Search.." >                   
                            <button type="submit"><i class="mdi mdi-magnify"></i></button>
                          </form>
                          
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(count($templates))
                                <table class="table table-hover ">
                                    <thead>
                                      <tr>
                                        <th>Sr.No.</th>
                                        <th>Email Title</th>
                                          <th>Subject</th>
                                          <th>created_at</th>
                                          <th>Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @php
                                      $i =1;
                                      @endphp
                                      @foreach($templates as $template)
                                      <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{ucwords($template->email_name)}}</td>
                                        <td>{{$template->subject}}</td>
                                        <td>{{date('d M Y', strtotime($template->created_at))}}</td>     

                                        <td> 
                                              {!! Form::open(['method'=>'DELETE', 'route'=>['template.delete',
                                                      $template->template_id]]) !!}
                                              <a href="{{ route('template.view',$template->template_id) }}"><button type="button" title="view" class="btn btn-success btn-xs"><span class="mdi mdi-eye"></span></button></a> 
                                               <a href="{{ route('template.edit',$template->template_id) }}"><button type="button" title="edit" class="btn btn-primary btn-xs"><span class="mdi mdi-launch"></span></button></a>
                                            <button  title="Delete" type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this user?');"><span class="mdi mdi-delete"></span></button>
                                               {!! Form::close() !!}
                                        </td>
                                        
                                      </tr>
                                      @endforeach
                                    </table>
                                     @else
                                    <div><h2>No Template Found.</h2></div>
                                     @endif
                                  </div>

                            <!-- /.box-body -->
                          </div>
                          <!-- /.box -->
                        </div>
                      </div>
                    </section>
                  @endsection