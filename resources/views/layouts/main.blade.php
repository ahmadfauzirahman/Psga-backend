<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 16/02/19
 * Time: 00.40
 */
?>
        <!DOCTYPE html>

<html lang="en">

<head>
    @include('layouts.head')
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
                    @section('sidebar')
                        @include('layouts.navbar')
                    @show
                </div>
            </div>
        </nav>
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        <!--/Horizontal Nav-->

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
                            <p>LPPM by<a href="https://hencework.com/" class="text-dark"
                                         target="_blank">TEAM A</a> ©
                                <?= date('Y') ?></p>
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
@include('layouts.footer')
</body>

</html>