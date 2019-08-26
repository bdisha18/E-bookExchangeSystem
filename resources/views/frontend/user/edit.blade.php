@extends('frontend.layout.master')
@section('content')
@php
use App\Model\Category;
@endphp


<!-- Page content -->
<div class="col-md-12">
<div class="content sidebar-content">
	<div class="upload-title">
		<h1>Update Your Profile</h1>
  <form class="publish-form" method="post" action="{{route('user.update', Auth::guard('member')->user()->user_id)}} " enctype="multipart/form-data">
				@csrf
                      <div class="row">
                        <div class="col-md-12">
                                <div class="form-group col-md-6 publish-input-field">
                                    <input type="text" name="fname" class=" publish-input" placeholder="Enter First Name" value="{{$users->fname}}" required>
                                    <div class="text-danger">{{ $errors->first('fname') }}</div>
                                </div>
                            </div>
                          </div>
                            <div class="row">
                              <div class="col-md-12">
                                   <div class="form-group col-md-6 publish-input-field">
                                    <input type="text" name="lname" class=" publish-input" placeholder="Enter Last Name" value="{{$users->lname}}" required>
                                    <div class="text-danger">{{ $errors->first('lname') }}</div>
                                </div>
                            </div>
                          </div>
                            <div class="row">
                              <div class="col-md-12">
                                   <div class="form-group col-md-6 publish-input-field">
                                    <input type="text" name="contactno" class=" publish-input" placeholder="Enter Contact Number" value="{{$users->contactno}}">
                                    <div class="text-danger">{{ $errors->first('contactno') }}</div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                   <div class="form-group col-md-6 publish-input-field">
                                    <input type="date" name="dob" class=" publish-input" placeholder="Enter Date Of dob" value="{{$users->dob}}">
                                    <div class="text-danger">{{ $errors->first('dob') }}</div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group col-md-6 publish-input-field">
                                      <div class="upload-btn-wrapper">
                                        <button class="upload-btn publish-upload-button">Image</button>
                                        <input type="file" name="image" />
                                      </div>
                                    <div class="text-danger">{{ $errors->first('image') }}</div>
                            </div>
                          </div>
                         </div>
                          <div class="form-group">
                            <a href="{{route('user.index')}}" class="profile-btn-cancel"><b>Cancel</b></a>
                            <button type="submit" class="profile-btn-save"><b>Save</b></button>
                        </div>
                    </form>
                </div>
              </div>
  
<div class="row">
    <div class="col-md-12">
      <div class="profile-title">
        <h1>INTERESTS</h1>
          <span><hr><button type="button" class= "btn btn-success" data-toggle="modal" data-target="#myModal">EDIT</button></span>

        <!-- The Modal -->
        <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
            
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Interests</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Modal body -->
            <form method="post" action="">
                @csrf
              @foreach($categories as $category)
              <div class="modal-body">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="modal-checkbox" value="{{$category->id}}"><span>{{$category->category_name}}</span>
                  </label>
                </div>
              </div>
              @endforeach
            </form>
              
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Add</button>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
    	 <div class="row mx-auto my-auto">
	    	<div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
	        	<div class="carousel-inner w-100" role="listbox">

    			@foreach($interests as $interest)
	                    @if($loop->first)
	                <div class="carousel-item active">
	                  @else
	                  <div class="carousel-item">
	                  @endif
		    	<div class="interest-content">
		    	<div class="grid">
					<figure class="effect-apollo">
						  @if(file_exists(public_path().'/'.env('INTEREST_IMAGE_PATH').$interest->image) && $interest->image)
				          <img src="{{ asset(env('INTEREST_IMAGE_PATH').$interest->image)}}" alt="Book Cover">
				           @else
				          <img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" alt="profile pic">
				          @endif
						<figcaption>
							<h4>{{Category::where('id', $interest->category_id)->value('category_name')}}</h4>
							
						</figcaption>			
					</figure>
				</div>
    	    </div>
		</div>
        @endforeach
	</div>
</div>
				<a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
	                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	                <span class="sr-only">Previous</span>
	            </a>
	            <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
	                <span class="carousel-control-next-icon" aria-hidden="true"></span>
	                <span class="sr-only">Next</span>
	            </a>
	        </div>
	    </div>
	</div>
</div>
  </div>

</div>
@stop