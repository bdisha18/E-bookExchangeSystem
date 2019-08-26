<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
  <!-- Owl Carousel -->
 <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css'>
<link rel='stylesheet prefetch' href='http://themes.audemedia.com/html/goodgrowth/css/owl.theme.default.min.css'>
<!--contact Form -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/hamburgers.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/util.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/main.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('frontend/custom.css')}}">
</head>
<body>
	@include('frontend.layout.header')
	@include('frontend.layout.sidebar')
	<div class="col-md-11">
		<div class="content-wrapper">
			
		@yield('content')
		</div>
	</div>
    @include('frontend.layout.footer')     
           
         

</body>
</html>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

<!-- Contact Form -->
	<!-- <script src="{{asset('frontend/js/popper.js')}}"></script> -->
	<script src="{{asset('frontend/js/select2.min.js')}}"></script>
	<script src="{{asset('frontend/js/tilt.jquery.min.js')}}"></script>

<script  src="{{asset('frontend/custom.js')}}"></script>




<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="{{asset('frontend/js/main.js')}}"></script>


<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>