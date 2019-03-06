<!DOCTYPE html>

<head>
    <title>Login</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
  
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
   
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="//fonts.googleapis.com/css?family=Quattrocento+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">
    

</head>


<body>
<script src='//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>

<body>

<section class="main">
    <div class="layer">
        <!---728x90--->

        <div class="bottom-grid">
            <div class="logo">
                <h1>Admin</h1>
            </div>
            <div class="links">
                <ul class="links-unordered-list">
                    <li class="active">
                        <a href="" class="">Login</a>
                    </li>
                    <li class="">
                        <a href="{{route('register')}}" class="">Register</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content-w3ls">
            <div class="text-center icon">
                <img src="image/images.png" height="100px" width="100px" />
            </div>
            <!---728x90--->

            <div class="content-bottom">
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="field-group">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input name="email" id="email" type="email" value="{{old('email')}}" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}"  placeholder="email" required autofocus>

                            @if($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$errors->first('email')}}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="field-group">
                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input name="password" id="myInput" type="Password" class="form-control {{$errors->has('password   ') ? 'is-invalid' : ''}}" placeholder="Password">

                            @if($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$errors->first('password')}}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="wthree-field">
                        <button type="submit" class="btn">Login</button>
                    </div>
                    <ul class="list-login">
                        <li>
                        </li>
                        <li>
                            <a href="{{route('password.request')}}" class="text-right">forgot password</a>
                        </li>
                        <li class="clearfix"></li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</section>


        <script>
var message = '';
<?php
$success = Session::get('success');
$error = Session::get('error');
$warning = Session::get('warning');
$information = Session::get('information');

if ($success) {
    Session::forget('success');
    ?>
    var message = '<?= $success ?>';
    var type = 'success';
    <?php
}
if ($error) {
    Session::forget('error');
    ?>
    var message = '<?= $error ?>';
    var type = 'error';
    <?php
}
if ($warning) {
    Session::forget('warning');
    ?>
    var message = '<?= $warning ?>';
    var type = 'warning';
    <?php
}
if ($information) {
    Session::forget('information');
    ?>
    var message = '<?= $information ?>';
    var type = 'information';
    <?php
}
?>
if (message !== '') {
    noty({
        text: message, type: type, layout: "topRight", timeout: 400000,
        animation: {
            open: 'animated bounceInRight', // in order to use this you'll need animate.css
            close: 'animated bounceOutRight',
            easing: 'swing',
            speed: 500
        }
    });
}
        </script>
</body>
</html>
