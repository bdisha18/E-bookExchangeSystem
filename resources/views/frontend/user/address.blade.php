@extends('frontend.layout.master')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="profile-title">
        <h1>SAVED ADDRESSES</h1>
          <span><hr></span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="address-box">
       <span><i class="fa fa-plus"> Create New Address</i></span>
      </div>
    </div>
  </div>
    
  <div class="row">
  <div class="col-md-12 address-form">
  <form class="publish-form" method="post" action="{{route('address.store')}} " enctype="multipart/form-data">
        @csrf
                      
                            <div class="row">
                                  <div class="form-group col-md-3 ">
                                    <input type="text" name="name" class=" publish-input" placeholder="Name" required>
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                </div>
                                <div class="form-group col-md-3 ">
                                  <select name="type" class=" address-input">
                                    <option value="">Select type</option>
                                    <option value="home">Home</option>
                                    <option value="office">Office</option>
                                  </select>
                                    <div class="text-danger">{{ $errors->first('type') }}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <input type="text" name="city" class=" publish-input" placeholder="City" required>
                                    <div class="text-danger">{{ $errors->first('city') }}</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" name="state" class=" publish-input" placeholder="State" required>
                                    <div class="text-danger">{{ $errors->first('state') }}</div>
                                </div>
                            </div>
                            <div class="row">
                                   <div class="form-group col-md-3 ">
                                    <input type="text" name="pincode" class=" publish-input" placeholder="Pincode" required>
                                    <div class="text-danger">{{ $errors->first('pincode') }}</div>
                                </div>
                                <div class="form-group col-md-3 ">
                                    <input type="text" name="contactno" class=" publish-input" placeholder="Contact Number" required>
                                    <div class="text-danger">{{ $errors->first('contactno') }}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <textarea name="address" class="publish-textarea" placeholder="Address" required></textarea>
                                    <div class="text-danger">{{ $errors->first('address') }}</div>
                                </div>
                            </div>
                            <div class="row">
                                   <div class="form-group col-md-3 ">
                                    <input type="checkbox" name="primary" value="1"> Make this as my Default Address
                                    <div class="text-danger">{{ $errors->first('pincode') }}</div>
                                </div>
                              </div>
                          <div class="form-group">
                            <button type="submit" class="publish-submit-btn"><b>Create</b></button>
                        </div>
                    </form>
                  </div>
                </div>
                @foreach($addresses as $address)
                <div class="row">
                  <div class="col-md-12">
                    <div class="address-details">
                      <div class="address-left">
                      <p><b>{{$address->name}}</b></p>
                      <p>{{$address->address}}</p>
                      <p>{{$address->city ." - ". $address->pincode}}</p>
                      <p>{{$address->state}}</p>
                      <p>Mobile: {{$address->contactno}}</p>
                       @if($address->primary == 1)
	                      <p class="primary-address">Default Address</p>
	                    @endif

                    </div>
                      <div class="address-right">
                      	<button class="btn btn-primary edit-modalbtn" type="submit" data-toggle="modal" data-target="#modalContactForm" value="{{$address->id}}">Edit</button>
                      	<a href="{{route('address.delete', $address->id)}}"><button class="btn btn-primary" type="submit" onclick="return confirm('Are you sure you want to delete this Address?');">Remove</button></a>
                      	<div class="address-type">
                      	{{$address->type}}
                      	</div>
                    </div>
                    </div>
                  </div>
                </div>
                @endforeach
                     		
                <div class="modal" id="modalContactForm" role="dialog">
							  <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header text-center">
                      <h4 class="modal-title w-100 font-weight-bold">Edit Address</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <form method="POST" id="edit-form" class="/address/update/{id}">
                    @csrf
                    <input class="editID" type="hidden" name="id" value="">
                    <div class="modal-body mx-3">
							        <div class="md-form mb-5">
							          <label data-error="wrong" data-success="right" for="form34">Name</label>
                        <input type="text" id="form34" class="form-control validate" value="{{$edit_address->name}}">
							        </div>

							        <div class="md-form mb-5">
							          <label data-error="wrong" data-success="right" for="form29">City</label>
                        <input type="text" id="form29" name="city" class="form-control validate" value="{{$edit_address->city}} disabled>
							        </div>

							        <div class="md-form mb-5">
							          <label data-error="wrong" data-success="right" for="form32">State</label>
                        <input type="text" name="state" id="form32" class="form-control validate" value="{{$edit_address->state}} disabled>
							        </div>

                      <div class="md-form mb-5">
                        <label data-error="wrong" data-success="right" for="form32">Pincode</label>
                        <input type="text" name="pincode" id="form32" class="form-control validate" value="{{$edit_address->pincode}}>
                      </div>

                      <div class="md-form mb-5">
                        <label data-error="wrong" data-success="right" for="form32">Phone Number</label>
                        <input type="text" name="contactno" id="form32" class="form-control validate" value="{{$edit_address->contactno}}>
                      </div>


                      <div class="md-form">
                        <label data-error="wrong" data-success="right" for="form8">Address</label>
                        <textarea type="text" id="form8" name="address" class="md-textarea form-control" rows="4">{{$edit_address->address}}</textarea>
                      </div>

                      <div class="md-form">
                        <label data-error="wrong" data-success="right" for="form8">Type</label>
                        <p><input type="radio" name="type" id="form32"  value="home"{{($edit_address == 'home') ? 'selected' : ''}}> Home</p>
                        <p><input type="radio" name="type" id="form32"  value="office"{{($edit_address == 'office') ? 'selected' : ''}}>
                         Work</p>
                      </div>

                      <div class="md-form">
                        <p><input type="checkbox" name="primary" id="form32"  value="1"{{($edit_address == '1') ? 'checked' : ''}}> Make this as my Default Address
                        </p>
                      </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                      <button type="submit" class="btn btn-unique">Save Changes <i class="fas fa-paper-plane-o ml-1"></i></button>
                    </div>
                    </form>
							    </div>
							  </div>
							</div>

</div>
@stop