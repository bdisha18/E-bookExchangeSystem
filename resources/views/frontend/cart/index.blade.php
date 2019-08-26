@extends('frontend.layout.main')
@section('content')
@php
use App\Model\Book;
use App\Model\Cart;
@endphp
<div class="row">
	<div class="col-md-11">
  <div class="heading cf">
    <h1>Shopping Cart</h1>
    <a href="{{route('home.index')}}" class="continue">Continue Shopping</a>
  </div>
</div>
</div>
  <div class="row">
	<div class="col-md-8">
<div class="wrap cf">
  <div class="cart">
    <ul class="cartWrap">
        <p>{{count($carts)}} Items</p>
        <hr>
        @foreach($carts as $product)
      <li class="items odd">
    <div class="infoWrap"> 
      @php
      $image = Book::where('book_id', $product->book_id)->value('book_image');
      @endphp
        <div class="cartSection">
          @if(file_exists(public_path().'/'.env('BOOK_IMAGE_PATH').$image) && $image)
         <img src="{{ asset(env('BOOK_IMAGE_PATH').$image)}}" class="itemImg"  height='110'  width='100'>
         @else
         <img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" class="itemImg" >
         @endif
          <p class="itemNumber"># {{Book::where('book_id', $product->book_id)->value('book_id')}}</p>
          <h3>{{Book::where('book_id', $product->book_id)->value('book_name')}}</h3>
        
           <p> <input type="text"  class="qty" placeholder="{{$product->quantity}}"/> x Rs {{Book::where('book_id', $product->book_id)->value('book_price')}}</p>
        
          @if(Book::where('book_id', $product->book_id)->value('status') == 'soldout')
          <p class="stockStatus">
            Sold Out
          </p>
          @endif
        </div>  
    
       
        <div class="prodTotal cartSection">
          <p>Rs {{$product->total_amount}}</p>
        </div>
              <div class="cartSection removeWrap">
           
                <a href="{{route('cart.delete', $product->cart_id)}}" class="remove"><button class="" type="submit" onclick="return confirm('Are you sure you want to Remove this Product?');">x</button></a>
        </div>
      </div>
      </li>
      @endforeach
    </ul>
  </div>
</div>
</div>
<div class="col-md-3 heading-top">
  <h3>Order Summary</h3>
  	<hr class="order-line">
  <div class="promoCode"><label for="promo">Have A Promo Code?</label><input type="text" name="promo" placholder="Enter Code" />
  <a href="#" class="cart-btn"></a></div>
@php
$subtotal = Cart::where('user_id', Auth::guard('member')->user()->user_id)->sum('total_amount');
@endphp
  <div class="subtotal cf">
    <ul>
      <li class="totalRow"><span class="label">Subtotal</span><span class="value">$ {{$subtotal}}</span></li>
      
          <li class="totalRow"><span class="label">Shipping</span><span class="value">$5.00</span></li>
      
            <li class="totalRow"><span class="label">Tax</span><span class="value">$4.00</span></li>
            <hr>
            <li class="totalRow final"><span class="label">Total</span><span class="value">$44.00</span></li>
      <li class="totalRow"><a href="{{route('payment.productdetail')}}" class="cart-btn continue">Proceed To Checkout</a></li>
    </ul>
  </div>
</div>
</div>
@stop