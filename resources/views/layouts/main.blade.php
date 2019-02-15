<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 16/02/19
 * Time: 00.40
 */
?>

        <!DOCTYPE html>
<!--
Template Name: Brunette - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Contact: https://hencework.ticksy.com/

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>PSGA</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Morris Charts CSS -->
    <link href="{{'public/vendors/morris.js/morris.css'}}" rel="stylesheet" type="text/css"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Toggles CSS -->
    <link href="{{asset('public/vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet"
          type="text/css">

    <!-- Toastr CSS -->
    <link href="{{asset('public/vendors/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet"
          type="text/css">

    <!-- Custom CSS -->
    <link href="{{asset('public/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
<!-- Preloader -->
<div class="preloader-it">
    <div class="loader-pendulums"></div>
</div>
<!-- /Preloader -->

<!-- HK Wrapper -->
<div id="app">

    <div class="hk-wrapper hk-horizontal-nav">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-xl navbar-dark fixed-top hk-navbar">
            <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><span
                        class="feather-icon"><i data-feather="menu"></i></span></a>
            <a class="navbar-brand" href="{{url('home')}}">
                <h2 class="brand-img d-inline-block text-white">PSGA</h2>
            </a>
            <ul class="navbar-nav hk-navbar-content">
                <li class="nav-item">
                    <a id="navbar_search_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span
                                class="feather-icon"><i data-feather="search"></i></span></a>
                </li>

                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar">
                                    <img src="{{asset('public/dist/img/avatar12.jpg')}}" alt="user"
                                         class="avatar-img rounded-circle">
                                </div>
                                <span class="badge badge-success badge-indicator"></span>
                            </div>
                            <div class="media-body">
                                <span>{{Auth::user()->name}}<i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX"
                         data-dropdown-out="flipOutX">
                        <a class="dropdown-item" href="profile.html"><i
                                    class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>
                        <a class="dropdown-item" href="#"><i
                                    class="dropdown-icon zmdi zmdi-card"></i><span>My balance</span></a>
                        <a class="dropdown-item" href="inbox.html"><i
                                    class="dropdown-icon zmdi zmdi-email"></i><span>Inbox</span></a>
                        <a class="dropdown-item" href="#"><i
                                    class="dropdown-icon zmdi zmdi-settings"></i><span>Settings</span></a>
                        <div class="dropdown-divider"></div>
                        <div class="sub-dropdown-menu show-on-hover">
                            <a href="#" class="dropdown-toggle dropdown-item no-caret"><i
                                        class="zmdi zmdi-check text-success"></i>Online</a>
                            <div class="dropdown-menu open-left-side">
                                <a class="dropdown-item" href="#"><i
                                            class="dropdown-icon zmdi zmdi-check text-success"></i><span>Online</span></a>
                                <a class="dropdown-item" href="#"><i
                                            class="dropdown-icon zmdi zmdi-circle-o text-warning"></i><span>Busy</span></a>
                                <a class="dropdown-item" href="#"><i
                                            class="dropdown-icon zmdi zmdi-minus-circle-outline text-danger"></i><span>Offline</span></a>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="dropdown-icon zmdi zmdi-power"></i><span>{{ __('Logout') }}</span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <form role="search" class="navbar-search">
            <div class="position-relative">
                <a href="javascript:void(0);" class="navbar-search-icon"><span class="feather-icon"><i
                                data-feather="search"></i></span></a>
                <input type="text" name="example-input1-group2" class="form-control" placeholder="Type here to Search">
                <a id="navbar_search_close" class="navbar-search-close" href="#"><span class="feather-icon"><i
                                data-feather="x"></i></span></a>
            </div>
        </form>
        <!-- /Top Navbar -->

        <!--Horizontal Nav-->
        <nav class="hk-nav hk-nav-light">
            <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i
                            data-feather="x"></i></span></a>
            <div class="nicescroll-bar">
                <div class="navbar-nav-wrap">
                    <ul class="navbar-nav flex-row">

                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('home')}}">
                                <span class="feather-icon"><i data-feather="home"></i></span>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        <!--/Horizontal Nav-->

        <!-- Setting Panel -->
        <div class="hk-settings-panel">
            <div class="nicescroll-bar position-relative">
                <div class="settings-panel-wrap">
                    <div class="settings-panel-head">
                        <img class="brand-img d-inline-block align-top" src="dist/img/logo-light.png" alt="brand"/>
                        <a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close"><span
                                    class="feather-icon"><i data-feather="x"></i></span></a>
                    </div>
                    <hr>
                    <h6 class="mb-5">Layout</h6>
                    <p class="font-14">Choose your preferred layout</p>
                    <div class="layout-img-wrap">
                        <div class="row">
                            <a href="dashboard1.html" class="col-6 mb-30">
                                <img class="rounded opacity-70" src="dist/img/layout1.png" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                            <a href="javascript:void(0);" class="col-6 mb-30 active">
                                <img class="rounded opacity-70" src="dist/img/layout2.png" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                            <a href="dashboard3.html" class="col-6 mb-30">
                                <img class="rounded opacity-70" src="dist/img/layout3.png" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                            <a href="dashboard4.html" class="col-6 mb-30">
                                <img class="rounded opacity-70" src="dist/img/layout4.png" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                            <a href="dashboard5.html" class="col-6">
                                <img class="rounded opacity-70" src="dist/img/layout5.png" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <h6 class="mb-5">Navigation</h6>
                    <p class="font-14">Menu comes in two modes: dark & light</p>
                    <div class="button-list hk-nav-select mb-10">
                        <button type="button" id="nav_light_select"
                                class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span
                                    class="icon-label"><i class="fa fa-sun-o"></i> </span><span
                                    class="btn-text">Light Mode</span></button>
                        <button type="button" id="nav_dark_select"
                                class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span
                                    class="icon-label"><i
                                        class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span>
                        </button>
                    </div>
                    <hr>
                    <h6 class="mb-5">Top Nav</h6>
                    <p class="font-14">Choose your liked color mode</p>
                    <div class="button-list hk-navbar-select mb-10">
                        <button type="button" id="navtop_light_select"
                                class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span
                                    class="icon-label"><i
                                        class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span>
                        </button>
                        <button type="button" id="navtop_dark_select"
                                class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span
                                    class="icon-label"><i class="fa fa-moon-o"></i> </span><span
                                    class="btn-text">Dark Mode</span></button>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <h6>Scrollable Header</h6>
                        <div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary scroll-nav-switch"></div>
                    </div>
                    <button id="reset_settings" class="btn btn-primary btn-block btn-reset mt-30">Reset</button>
                </div>
            </div>
            <img class="d-none" src="dist/img/logo-light.png" alt="brand"/>
            <img class="d-none" src="dist/img/logo-dark.png" alt="brand"/>
        </div>
        <!-- /Setting Panel -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
                <!-- Title -->
                <div class="hk-pg-header">
                    <div>
                        <h2 class="hk-pg-title font-weight-600"><?= $title ?></h2>
                    </div>
                </div>
                <!-- /Title -->

                <!-- Row -->
            @yield('main')
            <!-- /Row -->
            </div>
            <!-- /Container -->

            <!-- Footer -->
            <div class="hk-footer-wrap container">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Pampered by<a href="https://hencework.com/" class="text-dark"
                                             target="_blank">Hencework</a> ©
                                2019</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Follow us</p>
                            <a href="#"
                               class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span
                                        class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#"
                               class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span
                                        class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#"
                               class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span
                                        class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
</div>
<!-- /HK Wrapper -->

<!-- jQuery -->
<script src="{{asset('public/vendors/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('public/js/app.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('public/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('public/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{asset('public/dist/js/jquery.slimscroll.js')}}"></script>

<!-- Fancy Dropdown JS -->
<script src="{{asset('public/dist/js/dropdown-bootstrap-extended.js')}}"></script>

<!-- FeatherIcons JavaScript -->
<script src="{{asset('public/dist/js/feather.min.js')}}"></script>

<!-- Toggles JavaScript -->
<script src="{{asset('public/vendors/jquery-toggles/toggles.min.js')}}"></script>
<script src="{{asset('public/dist/js/toggle-data.js')}}"></script>

<!-- Toastr JS -->
<script src="{{asset('public/vendors/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>

<!-- Counter Animation JavaScript -->
<script src="{{asset('public/vendors/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('public/vendors/jquery.counterup/jquery.counterup.min.js')}}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{asset('public/vendors/raphael/raphael.min.js')}}"></script>
<script src="{{asset('public/vendors/morris.js/morris.min.js')}}"></script>

<!-- Easy pie chart JS -->
<script src="{{asset('public/vendors/easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>

<!-- Flot Charts JavaScript -->
<script src="{{asset('public/vendors/flot/excanvas.min.js')}}"></script>
<script src="{{asset('public/vendors/flot/jquery.flot.js')}}"></script>
<script src="{{asset('public/vendors/flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('public/vendors/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('public/vendors/flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('public/vendors/flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('public/vendors/flot/jquery.flot.crosshair.js')}}"></script>
<script src="{{asset('public/vendors/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>

<!-- EChartJS JavaScript -->
<script src="{{asset('public/vendors/echarts/dist/echarts-en.min.js')}}"></script>

<!-- Init JavaScript -->
<script src="{{asset('public/dist/js/init.js')}}"></script>
<script src="{{asset('public/dist/js/dashboard2-data.js')}}"></script>
</body>

</html>