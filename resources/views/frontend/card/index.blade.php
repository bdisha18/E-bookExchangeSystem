@extends('frontend.layout.master')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="profile-title">
        <h1>SAVED CARDS</h1>
          <span><hr></span>
      </div>
    </div>
  </div>
<div class="row">
	<div class="col-md-12">
		@foreach($cards as $card)
		<div class="col-md-4">
			<div class="card-box">
				<p>{{$card->bank_name}}</p>
				<h5>Card number</h5>
				<p class="card-number">{{$card->card_no}}</p>
				<h5>Name on Card</h5>
				<p>{{$card->cardholder_name}}</p>
			<div class="card-right">
				<h5>Validity</h5>
				<p>{{$card->expiry_month. ' / ' . $card->expiry_year}}</p>
			</div>
			<hr>
			<div class="card-btn-left">
				<a href="">Edit</a>
			</div>
			<div class="card-btn-right">
				<a href="{{route('card.delete', $card->card_id)}}"><button type="submit" onclick="return confirm('Are you sure you want to delete this Address?');">Remove</button></a>
			</div>
			<hr class="card-hr">
			</div>
		</div>
		@endforeach
		<div class="col-md-4">
			<div class="card-box">
				<div class="new-card" data-toggle="modal" data-target="#modalContactForm">
					<i class="fa fa-plus-circle"></i>
					<p>Add Card</p>
				</div>
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