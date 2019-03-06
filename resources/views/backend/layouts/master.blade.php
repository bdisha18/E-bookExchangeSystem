
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
    <title>Admin Panel</title>
    <link rel='stylesheet' href='https://d33wubrfki0l68.cloudfront.net/css/478ccdc1892151837f9e7163badb055b8a1833a5/assets/vendor/pace/pace.css'/>
    <script src='https://d33wubrfki0l68.cloudfront.net/js/3d1965f9e8e63c62b671967aafcad6603deec90c/assets/vendor/pace/pace.min.js'></script>
    <!--vendors-->
    <link rel='stylesheet' type='text/css' href='https://d33wubrfki0l68.cloudfront.net/bundles/291bbeead57f19651f311362abe809b67adc3fb5.css'/>

    <link rel='stylesheet' href='https://d33wubrfki0l68.cloudfront.net/bundles/dcd1663bd4b40ee5b03564aeb0245515dd3277b0.css'/>
    <link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,500,600" rel="stylesheet">
    <link rel='stylesheet' href='https://d33wubrfki0l68.cloudfront.net/css/04cc97dcdd1c8f6e5b9420845f0fac26b54dab84/default/assets/fonts/jost/jost.css'/>
    <!--Material Icons-->
    <link rel='stylesheet' type='text/css' href='https://d33wubrfki0l68.cloudfront.net/css/548117a22d5d22545a0ab2dddf8940a2e32c04ed/default/assets/fonts/materialdesignicons/materialdesignicons.min.css'/>
    
    <!--Bootstrap +  Admin CSS-->
    <link rel='stylesheet' type='text/css' href='https://d33wubrfki0l68.cloudfront.net/css/ed18bd005cf8b05f329fad0688d122e0515499ff/default/assets/css/atmos.min.css'/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
</head>
<body class="sidebar-pinned ">
    
        <div class="wrapper">

            @include('backend.layouts.header')
            @include('backend.layouts.sidebar')

            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>


<script src='https://d33wubrfki0l68.cloudfront.net/bundles/9556cd6744b0b19628598270bd385082cda6a269.js'></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66116118-3"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'UA-66116118-3'); </script>

<!--Additional Page includes-->
<script src='https://d33wubrfki0l68.cloudfront.net/js/c36248babf70a3c7ad1dcd98d4250fa60842eea9/assets/vendor/apexchart/apexcharts.min.js'></script>
<!--chart data for current dashboard-->
<script src='https://d33wubrfki0l68.cloudfront.net/js/3749472f7427605de9b2426672b2b5c5195c9cd2/assets/js/dashboard-05.js'></script>

</body>
</html>