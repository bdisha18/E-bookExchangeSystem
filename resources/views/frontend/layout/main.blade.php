<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
  <!-- Owl Carousel -->
 <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css'>
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
	<div class="col-md-12">
		<div class="content-wrapper">
		@yield('content')
		</div>
	</div>
      
           
         

</body>
</html>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Owl Carousel -->
<!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script> -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js'></script>

<!-- Contact Form -->
	<script src="{{asset('frontend/js/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('frontend/js/select2.min.js')}}"></script>
	<script src="{{asset('frontend/js/tilt.jquery.min.js')}}"></script>



<script  src="{{asset('frontend/custom.js')}}"></script>




<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58786679-1', 'auto');
  ga('send', 'pageview');
</script>