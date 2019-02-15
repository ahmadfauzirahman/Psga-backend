<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>PSGA Signup</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Custom CSS -->
    <link href="{{asset('public/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
<!-- Preloader -->
<div class="preloader-it">
    <div class="loader-pendulums"></div>
</div>
<!-- /Preloader -->
<div class="hk-wrapper">

    <!-- HK Wrapper -->
@yield('login')
<!-- /HK Wrapper -->
</div>

<!-- jQuery -->
<script src="{{asset('public/vendors/jquery/dist/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('public/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('public/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{asset('public/dist/js/jquery.slimscroll.js')}}"></script>

<!-- Fancy Dropdown JS -->
<script src="{{asset('public/dist/js/dropdown-bootstrap-extended.js')}}"></script>

<!-- FeatherIcons JavaScript -->
<script src="{{asset('public/dist/js/feather.min.js')}}"></script>
<script src="{{asset('public/vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>
<!-- Init JavaScript -->
<script src="{{asset('public/dist/js/init.js')}}"></script>

<script src="{{asset('public/dist/js/login-data.js')}}"></script>
</body>

</html>