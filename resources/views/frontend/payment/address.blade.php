@extends('frontend.layout.master')
@section('content')
@php
use App\Model\Book;
@endphp
<div class="row">
    <div class="col-md-12">
      <div class="profile-title">
        <h1>SELECT DELIVERY ADDRESS</h1>
          <span><hr></span>
      </div>
    </div>
  </div>
<div class="row">
  <div class="col-md-12">
    @foreach($addresses as $address)
    <div class="col-md-4">
      <div class="card-box">
        <div class="row">
        <div class="col-md-2 address-control">
          @csrf
          <input type="radio" name="id" value="" data-id="{{$address->id}}" data-url="{{route('payment.address.update', $address->id)}}" class="address-input">
        </div>
        <div class="col-md-10">
        <h4>{{$address->name}}
          @if($address->primary == 1)
                (DEFAULT)
              @endif</h4><br>
        <p>{{$address->address}}</p>
        <p>{{$address->city}} - {{$address->pincode}}</p>
        <p>{{$address->state}}</p><br>
        <p>Mobile: {{$address->contactno}}</p>
        </div>
      </div>
      <hr class="upper-hr">
      <div class="row">
      <div class="card-btn-left">
        <a href="">Edit</a>
      </div>
        <hr class="card-hr">
      <div class="card-btn-right">
        <a href="{{route('address.delete', $address->id)}}"><button type="submit" onclick="return confirm('Are you sure you want to delete this Address?');">Remove</button></a>
      </div>
      </div>
    </div>
  </div>
    @endforeach
    <div class="col-md-4">
      <div class="card-box">
        <div class="new-card" data-toggle="modal" data-target="#modalContactForm">
          <i class="fa fa-plus-circle"></i>
          <p>Add New Address</p>
        </div>
      </div>
    </div>
    <div class="col-md-3 heading-top">
        <h3>Order Summary</h3>
          <hr class="order-line">
          <p>ESTIMATED DELIVERY DATE</p>
          @foreach($products as $product)
          @php
          $image = Book::where('book_id', $product->book_id)->value('book_image');
          @endphp
          @if(file_exists(public_path().'/'.env('BOOK_IMAGE_PATH').$image) && $image)
           <img src="{{ asset(env('BOOK_IMAGE_PATH').$image)}}" class="itemImg"  height='70'  width='70' style="margin-right: 20px;">
           @else
           <img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" class="itemImg" >
           @endif
           <span>date</span><br><br>
           @endforeach
          <h4>Price Details</h4>
          <hr>
        <div class="subtotal cf">
          <ul>
            <li class="totalRow"><span class="label">Total MRP</span><span class="value">$dsc</span></li>
            
                <li class="totalRow"><span class="label">Bag Discount</span><span class="value">$5.00</span></li>
            
                  <li class="totalRow"><span class="label">Tax</span><span class="value">$4.00</span></li>
                   <li class="totalRow"><span class="label">Delivery Charges</span><span class="value">$4.00</span></li>
                  <hr>
                  <li class="totalRow final"><span class="label">Total</span><span class="value">$44.00</span></li>
            <li class="totalRow"><a href="{{route('payment.address')}}" class="cart-btn continue">Proceed To Checkout</a></li>
          </ul>
        </div>
      </div>
    <div class="modal fade" id="modalContactForm" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header text-center">
                      <h4 class="modal-title w-100 font-weight-bold">Write to us</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body mx-3">
                      <div class="md-form mb-5">
                        <i class="fas fa-user prefix grey-text"></i>
                        <input type="text" id="form34" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form34">Your name</label>
                      </div>

                      <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="email" id="form29" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form29">Your email</label>
                      </div>

                      <div class="md-form mb-5">
                        <i class="fas fa-tag prefix grey-text"></i>
                        <input type="text" id="form32" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form32">Subject</label>
                      </div>

                      <div class="md-form">
                        <i class="fas fa-pencil prefix grey-text"></i>
                        <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
                        <label data-error="wrong" data-success="right" for="form8">Your message</label>
                      </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-unique">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
                    </div>
                  </div>
                </div>
              </div>
  </div>
</div>
</div>
@stop