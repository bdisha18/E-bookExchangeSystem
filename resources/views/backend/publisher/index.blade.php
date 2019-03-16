
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
                                <i class="mdi mdi-table "></i></span> Publisher
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
                                @if(count($publishers))
                                <table class="table table-hover ">
                                    <thead>
                                      <tr>
                                        <th>Sr.No.</th>
                                          <th>Publisher Name</th>
                                          <th>Book Name</th>
                                          <th>Author Name</th>
                                          <th>Cover Image</th>
                                          <th>Status</th>
                                          <th>Released Date
                                          <th>Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @php
                                      $i =1;
                                      @endphp
                                      @foreach($publishers as $publisher)
                                      <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{ucwords($publisher->publisher_name)}}
                                        </td>
                                        <td>{{$publisher->book_name}}</td>
                                        <td>{{$publisher->author_name}}</td>
                                        @if(file_exists(public_path().'/'.env('PUBLISHER_IMAGE_PATH').$publisher->image) && $publisher->image)
                                        <td><img src="{{ asset(env('PUBLISHER_IMAGE_PATH').$publisher->image)}}" alt="Book Cover" class="image" height="50px" width="60"></td>
                                        @else
                                        <td><img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" alt="profile pic" class="image" height="60px"></td>
                                        @endif 
                                        
                                        <td><label class="switch">
                                            <input type="checkbox" name="status" class="update-status"  data-id="{{$publisher->publisher_id}}" 
                                                   data-url="{{ route('publisher.status', $publisher->publisher_id) }}" {{($publisher->status == 'active')? 'checked' : ''}}>
                                            <span class="slider round"></span></label>
                                        </td>
                                        <td>{{$publisher->created_at}}</td>

                                        <td> 
                                              {!! Form::open(['method'=>'DELETE', 'route'=>['publisher.delete',
                                                      $publisher->admin_id]]) !!}
                                              <a href="{{ route('publisher.view',$publisher->publisher_id) }}"><button type="button" title="view" class="btn btn-success btn-xs"><span class="mdi mdi-eye"></span></button></a> 
                                                                      
                                               <a href="{{ route('publisher.edit',$publisher->publisher_id) }}"><button type="button" title="edit" class="btn btn-primary btn-xs"><span class="mdi mdi-launch"></span></button></a>

                                               <button  title="Delete" type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this user?');"><span class="mdi mdi-delete"></span></button>
                                               {!! Form::close() !!}
                                        </td>
                                        
                                      </tr>
                                      @endforeach
                                    </table>
                                     @else
                                    <div><h2>No Publisher Found.</h2></div>
                                     @endif
                                  </div>

                            <!-- /.box-body -->
                          </div>
                          <!-- /.box -->
                        </div>
                      </div>
                    </section>
                  @endsection