@extends('frontend.layout.master')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="second-img">
		<img src="{{asset('frontend/image/otherimages/bg-slider/bg-3.jpg')}}">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12 section-services">
		<div class="services">
			<div class= "col-md-10 col-md-offset-1 center section-title">
				<hr>
				<h1>What You Have To Do</h1>
				<hr class="section-titlehr">
				<div class="col-md-6 col-sm-6 service animated fadeInLeft visible" data-animation="fadeInLeft" data-animation-delay="700">
					<span class="service-icon center"><i class="fa fa-address-book-o fa-3x"></i></span>
					<div class="service-desc">
						<h4 class="service-title color-scheme">Clean Design</h4>
						<p class="service-description justify">
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
						</p>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 service animated fadeInUp visible" data-animation="fadeInLeft" data-animation-delay="700">
					<span class="service-icon center"><i class="fa fa-address-book-o fa-3x"></i></span>
					<div class="service-desc">
						<h4 class="service-title color-scheme">Clean Design</h4>
						<p class="service-description justify">
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
						</p>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 service animated fadeInRight visible" data-animation="fadeInLeft" data-animation-delay="700">
					<span class="service-icon center"><i class="fa fa-address-book-o fa-3x"></i></span>
					<div class="service-desc">
						<h4 class="service-title color-scheme">Clean Design</h4>
						<p class="service-description justify">
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
						</p>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 service animated fadeInUp visible" data-animation="fadeInLeft" data-animation-delay="700">
					<span class="service-icon center"><i class="fa fa-address-book-o fa-3x"></i></span>
					<div class="service-desc">
						<h4 class="service-title color-scheme">Clean Design</h4>
						<p class="service-description justify">
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="form-scheme">
			<div class= "col-md-10 col-md-offset-1 center section-title">
				<hr>
				<h1>Add Details</h1>
				<hr class="section-titlehr">
				 <div class="address-box">
			       <a href="javascript:void(0)" ><span class="addNewForm"><i class="fa fa-plus"> Create New Form</i></span></a>
			      </div>
				<form method="post" action="{{route('second.store')}}" enctype="multipart/form-data">
					@csrf
					<div class="containerArea">
					<div class="form-content cloneContent">
					<div class="row">
						<div class="col-md-6 second-form">
							<input type="text" name="book_name[]" class="form-input" placeholder="Book Name">
							<div class="form-border"></div>
						</div>
						<div class="col-md-6 second-form">
							<input type="text" name="author_name[]" class="form-input" placeholder="Author Name">
							<div class="form-border"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 second-form">
							<input type="text" name="price[]" class="form-input" placeholder="MRP">
						<div class="form-border"></div>
						</div>
						<div class="col-md-6 second-form">
							<input type="text" name="years[]" class="form-input" placeholder="Years">
						<div class="form-border"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 upload-btn-wrapper">
							<button class="upload-form-btn"><b>Upload Image</b>
							<input type="file" name="image[]" />
							</button>
						</div>
						<div>
						<button class="remove-form-btn"><b>Remove</b></button>
						</div>
					</div>
					</div>
				</div>
					<div class="button-container">
						<button class="rainbow-btn" type="submit"><span>Submit</span></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12 section-books">
		<div class="form-scheme">
		<div class= "col-md-10 col-md-offset-1 center section-title">
				<hr>
				<h1>Recommended Books</h1>
				<hr class="section-titlehr">
				@foreach($books as $book)
				<div class="col-md-4">
				<figure class="snip1573 hover">
					@if(file_exists(public_path().'/'.env('BOOK_IMAGE_PATH').$book->book_image) && $book->book_image)
                    <img src="{{ asset(env('BOOK_IMAGE_PATH').$book->book_image)}}" alt="Book Cover">
                     @else
                     <img src="{{ asset(env('DEFAULT_IMAGE_PATH'))}}" alt="profile pic">
                     @endif
				  <figcaption>
				    <h3>Read More</h3>
				  </figcaption>
				  <a href="{{route('product.index', $book->book_id)}}"></a>
				</figure>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
</div>
	
@stop