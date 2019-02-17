<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 17/02/19
 * Time: 08.08
 */
?>
<ul class="navbar-nav flex-row">

    <li class="<?= $_SERVER['REQUEST_URI'] == '/kp-lppm/psga-backend/home' ? 'nav-item active' : 'nav-item' ?>">
        <a class="nav-link" href="{{url('home')}}">
            <span class="feather-icon"><i data-feather="home"></i></span>
            <span class="nav-link-text">Dashboard</span>
        </a>
    </li>
    <li class="<?= $_SERVER['REQUEST_URI'] == '/kp-lppm/psga-backend/home' ? 'nav-item active' : 'nav-item' ?>">
        <a class="nav-link" href="{{url('kegiatan-home')}}">
            <span class="feather-icon"><i data-feather="aperture"></i></span>
            <span class="nav-link-text">Data Kegiatan</span>
        </a>
    </li>
</ul>
