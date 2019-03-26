@extends('backend.layouts.master')
@section('content')
@php
use App\Model\Offer;
@endphp

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-table "></i></span> Edit Transaction
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="container  pull-up">
            <div class="row">
                <div class="col-lg-12">

                    <!--widget card begin-->
                    <form role="form" action="{{ route('offer.update',$offer->offer_id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="card m-b-30">
                        <div class="card-header">
                              <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Offer Title</label>
                                    <input type="text" name="offer_title" class="form-control" value="{{$offer->offer_title}}" placeholder="Offer Title">
                                    <div class="text-danger">{{ $errors->first('offer_title') }}</div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Offer Description</label>
                                    <input type="text" name="offer_description" class="form-control" value="{{$offer->offer_description}}" placeholder="Offer Description">
                                    <div class="text-danger">{{ $errors->first('offer_description') }}</div>
                                </div>
                               <div class="form-group col-md-4">
                                    <label>Start Date</label>
                                    <input type="text" name="start_date" class="form-control" value="{{$offer->start_date}}" placeholder="start_date">
                                    <div class="text-danger">{{ $errors->first('start_date') }}</div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>End Date</label>
                                    <input type="text" name="end_date" class="form-control" value="{{$offer->end_date}}" placeholder="end_date">
                                    <div class="text-danger">{{ $errors->first('end_date') }}</div>
                                </div>
                               <div class="form-group col-md-4">
                                    <label>Discount</label>
                                    <input type="text" name="discount_amount" class="form-control" value="{{$offer->discount_amount}}" placeholder="discount amount">
                                    <div class="text-danger">{{ $errors->first('discount_amount') }}</div>
                                </div>
                                  <div class="form-group col-md-4">
                                  <label>Status</label><br>
                                    <label class="radio-inline">Active
                                      </label>
                                      <input class="col-md-2" type="radio" name="status" value="active" {{($offer->status == 'active')? 'checked' : ''}}>
                                      <label class="radio-inline">Deactivate</label>
                                      <input class="col-md-2" type="radio" name="status" value="inactive" {{($offer->status == 'inactive')? 'checked' : ''}}>
                                </div>
                                  <div class="form-group col-md-4">
                                    <label>Terms & Conditions</label>
                                    <textarea name="t&c" class="form-control" 
                                              placeholder="    Write  terms & conditions here"></textarea>
                                    <div class="text-danger">{{ $errors->first('t&c') }}</div>
                                
                                   </div>
                               
                              </div>
                                </div>

                                    </div>
                               
                                   
                            </div>
                          </div>
                      </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{route('offer.index')}}" class="button
                            btn btn-danger">Submit</a>
                        </div>
                        </form>
                        
                      </div>
                    </div>
                  </div>
@endsection