@extends('frontend.layout.master')
@section('content')

<div class="bg-contact100" style="background-image: url('{{asset("frontend/image/bg-01.jpg")}}');">
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
					<img src="{{asset('frontend/image/img-01.png')}}" alt="IMG">
				</div>

				<form class="contact100-form validate-form" method="post" action="{{route('contact.store')}}">
					@csrf
					<span class="contact100-form-title">
						Get in touch
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="name" placeholder="Name" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="Email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Message is required" required>
						<textarea class="input100" name="message" placeholder="Message"></textarea>
						<span class="focus-input100"></span>
					</div>

					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn" type="submit">
							Send
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 contact-text">
			<h1>Let’s make something awesome together.</h1>
			<p>Drop us a line, or give us a heads up if you’re interested in visiting us.</p>
		</div>
	</div>
</div>
@stop