
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
              <div class="box-tools">
                 <form  action="{{route('user.index')}}">
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
                  <td>{{$user->image}}</td>
                  <td>{{date('d M Y', strtotime($user->created_at))}}</td>     
                  <td><label class="switch">
                      <input type="checkbox" class="update-status"  data-id="{{$user->id}}" data-url="{{ route('user.status', $user->id) }}" {{($user->status == 'active')? 'checked' : ''}}>
                      <span class="slider round"></span></label>
                  </td>

                  <td> 
  
                        <a href="{{ route('user.view',$user->id) }}"><button type="button" title="view" class="btn btn-success btn-xs"><span class="mdi mdi-eye"></span></button></a> 
                                                
                         <a href="{{ route('user.edit',$user->id) }}"><button type="button" title="edit" class="btn btn-primary btn-xs"><span class="mdi mdi-launch"></span></button></a>

                        
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