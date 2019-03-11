
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
                                <table class="table table-hover ">
                                    <thead>
                                    <tr>
                                      <th><a href="{{ route('follower.index1',$follower->id) }}"><button type="button" title="view" class="btn btn-success btn-xs"><span class="mdi mdi-eye"></span>Followers</button></a></th>

                                      {{--<th><a href="{{ route('follower.view',$follower->id) }}"><button type="button" title="view" class="btn btn-success btn-xs"><span class="mdi mdi-eye"></span>Following</button></a></th>

                                      <th><a href="{{ route('follower.view',$follower->id) }}"><button type="button" title="view" class="btn btn-success btn-xs"><span class="mdi mdi-eye"></span>Blocked</button></a></th>

                                      <th><a href="{{ route('follower.view',$follower->id) }}"><button type="button" title="view" class="btn btn-success btn-xs"><span class="mdi mdi-eye"></span>Requests</button></a></th>--}}
                                    </tr>
                                    </thead>
  
                        
              </table>
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