
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
                                <i class="mdi mdi-table "></i></span> Admin
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
                          @if (session('status'))
                          <p style="color: green;">{{session('status')}}</p>
                          @endif
                          
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                {{--@if(count($admins))--}}
                                <table class="table table-hover ">
                                    <thead>
                                      <tr>
                                        <th>Sr.No.</th>
                                          <th>Name</th>
                                          <th>email</th>
                                          <th>image</th>
                                          <th>Signup Date</th>
                                          <th>Status</th>
                                          <th>Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @php
                                      $i =1;
                                      @endphp
                                      @foreach($admins as $admin)
                                      <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{ucwords($admin->name)}}
                                        </td>
                                        <td>{{$admin->email}}</td>
                                        @if(file_exists(public_path().'/'.env('ADMIN_IMAGE_PATH').$admin->image) && $admin->image)
                                        <td><img src="{{ asset(env('ADMIN_IMAGE_PATH').$admin->image)}}" alt="profile pic" class="adminImage" height="50px" width="60"></td>
                                        @else
                                        <td><img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" alt="profile pic" class="adminImage" height="60px"></td>
                                        @endif 
                                        <td>{{date('d M Y', strtotime($admin->created_at))}}</td>     
                                        <td><label class="switch">
                                            <input type="checkbox" name="status" class="update-status"  data-id="{{$admin->admin_id}}" data-url="{{ route('admin.status', $admin->id) }}" {{($admin->status == 'active')? 'checked' : ''}}>
                                            <span class="slider round"></span></label>
                                        </td>

                                        <td> 
                                              {!! Form::open(['method'=>'DELETE', 'route'=>['admin.delete',
                                                      $admin->admin_id]]) !!}
                                                                      
                                               <a href="{{ route('admin.edit',$admin->admin_id) }}"><button type="button" title="edit" class="btn btn-primary btn-xs"><span class="mdi mdi-launch"></span></button></a>

                                               <button  title="Delete" type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this user?');"><span class="mdi mdi-delete"></span></button>
                                               {!! Form::close() !!}
                                        </td>
                                        
                                      </tr>
                                      @endforeach
                                    </table>
                                     {{--@else
                                    <div><h2>No Admin Found.</h2></div>
                                     @endif--}}
                                  </div>

                            <!-- /.box-body -->
                          </div>
                          <!-- /.box -->
                        </div>
                      </div>
                    </section>
                  @endsection