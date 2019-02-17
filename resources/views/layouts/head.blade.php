<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 17/02/19
 * Time: 08.23
 */
?>
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


<link href="{{asset('public/vendors/datatables.net-dt/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('public/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
<!-- Toggles CSS -->
<link href="{{asset('public/vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('public/vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet"
      type="text/css">

<!-- Toastr CSS -->
<link href="{{asset('public/vendors/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet"
      type="text/css">

<!-- Custom CSS -->
<link href="{{asset('public/dist/css/style.css')}}" rel="stylesheet" type="text/css">
