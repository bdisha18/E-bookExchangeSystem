@extends('backend.layouts.master')
@section('content')

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-table "></i></span> Edit Address
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="container  pull-up">
            <div class="row">
                <div class="col-lg-12">

                    <!--widget card begin-->
                    <form role="form" action="{{ route('address.update',$address->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="card m-b-30">
                        <div class="card-header">
                              <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>City</label>
                                    <input type="text" name="city" class="form-control" value="{{$address->city}}" placeholder="City">
                                    <div class="text-danger">{{ $errors->first('city') }}</div>
                                </div>
                                
                                <div class="form-group col-md-4">
                                    <label>State</label>
                                    <input type="text" name="state" class="form-control" value="{{$address->state}}">
                                    <div class="text-danger">{{ $errors->first('state') }}</div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Country</label>
                                    <input type="text" name="country" class="form-control" value="{{$address->country}}">
                                    <div class="text-danger">{{ $errors->first('country') }}</div>
                                </div>
            
                                    <div class="form-group col-md-12">
                                    <label>Address</label>
                                    <textarea type="text" name="address" class="form-control" value="{{old($address->address)}}"></textarea>
                                    <div class="text-danger">{{ $errors->first('address') }}</div>
                                </div>
                                     
                                                         
                            </div>
                          </div>
                      </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{route('address.index')}}" class="button
                            btn btn-danger">Back</a>
                        </div>
                        </form>
                        
                      </div>
                    </div>
                  </div>
@endsection