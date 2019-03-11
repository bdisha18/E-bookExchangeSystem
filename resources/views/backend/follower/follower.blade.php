<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
     <div class="modal-content">
             <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Followers</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
            </div>
            <div class="modal-body">
                     <div class="table-responsive">
                                @if(count($followers))
                                <table class="table table-hover ">
                                    <thead>
                                    <tr>
                                        <th>Sr.No.</th>
                                          <th>Name</th>
                                          <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i =1;
                                        @endphp
                                      <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$follower->email}}</td>
                                        @if(file_exists(public_path().'/'.env('USER_IMAGE_PATH').$follower->image) && $follower->image)
                                        <td><img src="{{ asset(env('USER_IMAGE_PATH').$follower->image)}}" alt="profile pic" class="userImage">
                                        @else
                                        <img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" alt="profile pic" class="userImage" height="60px">
                                        @endif 
                                        <span>{{ucwords($follower->fname)}} {{ucwords($follower->lname)}}
                                        </span></td>
                                             
                                        <td>
                                        
                        <a href="{{ route('follower.view',$follower->id) }}"><button type="button" title="view" class="btn btn-success btn-xs"><span class="mdi mdi-eye"></span></button></a> 
                                                
                        

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
                    <p>
                                                  
                    </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
             </div>
    </div>
</div>
</div>