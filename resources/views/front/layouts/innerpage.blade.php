<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Lucan Kitchens & Wardrobes</title>
      <meta name="description" content="@yield('description')">
      <meta name="keywords" content="@yield('keywords')">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('/frontend/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/frontend/css/all.min.css') }}">
      <link href="{{ asset('/frontend/css/custom.css') }}" rel="stylesheet">
      <link href="{{ asset('/frontend/css/menu.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('/frontend/css/custom_responsive.css') }}" rel="stylesheet">
      <link href="{{ asset('/frontend/css/animate.css') }}" rel="stylesheet">
      <link rel="shortcut icon" href="{{ asset('/frontend/images/favicon.png') }}" type="image/x-icon">
      <meta name="google-site-verification" content="y2T15Bkz5p0NKCVPYVYAQLtlz7wscU7CGQ28A0iWs2g"/>

     <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173380420-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-173380420-1');
        </script>
   </head>
   <body>
      <!--header wrapper start-->
       @include('front/includes/header')
      <!--header wrapper end-->
      <!--banner wrapper start-->
      
      <!--banner wrapper end-->
      <!--topconsultation start-->
      @yield('content')
      <!--footer wrapper start-->
      @include('front/includes/footer')