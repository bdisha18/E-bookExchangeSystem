
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
                                <i class="mdi mdi-table "></i></span> Followers
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
              <div class="box-tools">
                 <form  action="{{route('follower.index')}}">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="search" class="form-control pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </form>
              </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(count($followers))
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
                                      @php $i=($followers->perPage() * ($followers->currentPage() - 1))+1; @endphp
                                      @foreach($followers as $follower)
                                      <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{ucwords($follower->fname)}} {{ucwords($follower->lname)}}
                                        </td>
                                        <td>{{$follower->email}}</td>
                                        @if(file_exists(public_path().'/'.env('USER_IMAGE_PATH').$follower->image) && $follower->image)
                                        <td><img src="{{ asset(env('USER_IMAGE_PATH').$follower->image)}}" alt="profile pic" class="userImage"></td>
                                        @else
                                        <td><img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" alt="profile pic" class="userImage"></td>
                                        @endif 
                                        <td>{{date('d M Y', strtotime($follower->created_at))}}</td>     

                                        <td><label class="switch">
                                            <input type="checkbox" name="status" class="update-status"  data-id="{{$follower->id}}" data-url="{{ route('follower.status', $follower->id) }}" {{($follower->status == 'active')? 'checked' : ''}}>
                                            <span class="slider round"></span></label>
                                        </td>

                  <td> 
                         {!! Form::open(['method'=>'DELETE', 'route'=>['follower.delete', $follower->id]]) !!}
  
                        <a href="{{ route('follower.view',$follower->id) }}"><button type="button" title="view" class="btn btn-success btn-xs"><span class="mdi mdi-eye"></span></button></a> 
                                                
                        <a href="{{ route('follower.edit',$follower->id) }}"><button type="button" title="edit" class="btn btn-primary btn-xs"><span class="mdi mdi-launch"></span></button></a>

                        <button  title="Delete" type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this user?');"><span class="mdi mdi-delete"></span></button>

                        {!! Form::close() !!}

                  </td>
                </tr>
                @endforeach
              </table>
              {{$followers->links()}}
               @else
              <div><h2>No Followers Found.</h2></div>
             @endif
            </div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="form-group"> 
            <a href="{{route('user.index')}}" class="button btn btn-danger">Back</a>
          </div>
      </div>
      </section>
      @endsection