
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
                                <i class="mdi mdi-table "></i></span> Users
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
                        <form action="{{route('user.index')}}" method="get">
                            <input name="search" type="text" placeholder="Search.." >                   
                            <button type="submit"><i class="fa fa-search"></i></button>
                          </form>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(count($users))
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
                                      @php $i=($users->perPage() * ($users->currentPage() - 1))+1; @endphp
                                      @foreach($users as $user)
                                      <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{ucwords($user->fname)}} {{ucwords($user->lname)}}
                                        </td>
                                        <td>{{$user->email}}</td>
                                        @if(file_exists(public_path().'/'.env('USER_IMAGE_PATH').$user->image) && $user->image)
                                        <td><img src="{{ asset(env('USER_IMAGE_PATH').$user->image)}}" alt="profile pic" class="userImage" height="65px" width="80px"></td>
                                        @else
                                        <td><img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" alt="profile pic" class="userImage" height="60px"></td>
                                        @endif 
                                        <td>{{date('d M Y', strtotime($user->created_at))}}</td>     

                                        <td><label class="switch">
                                            <input type="checkbox" name="status" class="update-status"  data-id="{{$user->user_id}}" data-url="{{ route('user.status', $user->id) }}" {{($user->status == 'active')? 'checked' : ''}}>
                                            <span class="slider round"></span></label>
                                        </td>

                  <td> 
  
                        <a href="{{ route('user.view',$user->user_id) }}"><button type="button" title="view" class="btn btn-success btn-xs"><span class="mdi mdi-eye"></span></button></a> 
                                                
                        <a href="{{ route('user.edit',$user->user_id) }}"><button type="button" title="edit" class="btn btn-primary btn-xs"><span class="mdi mdi-launch"></span></button></a>


                        
                  </td>
                </tr>
                @endforeach
              </table>
              {{$users->links()}}
               @else
              <div><h2>No Users Found.</h2></div>
             @endif
            </div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      </section>
      @endsection