<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="author" content="RoQaY">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" Smart Movies website">
    <meta name="keywords" content=" Smart Movies ">
    <meta name="csrf-token" content="V2G8zLS7dL5HzdfwxaBDewvJvAKCyeThQE4NBtJv">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/fontawesome.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/responsive.css') }}">
</head>

<body>

    <div class="body_wrapper">
        <div class="preloader">
            <div class="preloader-loading">
                <img src="{{ asset('images/logo-m.png')}}" data-src="{{ asset('images/logo-m.png')}}" class="lazyload">
            </div>
        </div>
        <div class="top_nav">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <ul class="d-flex about-site">
                            <li><a href="#">Questions</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Terms Of Privacy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <ul class="d-flex social ">
                            <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                            <li> <a href="#"> <i class="fab fa-twitter"></i> </a></li>
                            <li> <a href="#"> <i class="fab fa-instagram"></i> </a></li>
                            <li> <a href="#"> <i class="fab fa-snapchat-ghost"></i> </a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
       
