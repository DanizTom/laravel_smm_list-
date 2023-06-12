<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=" @yield('description') ">
    <meta name="keywords" content=" @yield('keywords') ">
    <meta name="author" content="Berke Kiran">
    <title> @yield('title') </title>
    <!-- Bootstrap core CSS -->
    <!-- <link href="{{ asset('assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('assets')}}/css/all.css" rel="stylesheet">
  
    <link href="{{ asset('assets')}}/css/owl.carousel.min.css" rel="stylesheet">
 
    <link href="{{ asset('assets')}}/css/jquery.fancybox.min.css" rel="stylesheet">
 
    <link href="{{ asset('assets')}}/css/style.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/css/import.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/css/movie.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/css/mizukiri.css" rel="stylesheet"> -->
    <meta name="keywords" content="SMM Watch, SMM Panel List, Best SMM Panels" />
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="icon" type="image/png" href="/favicon.png" sizes="64x64">
    <meta name="csrf-param" content="authenticity_token" />
    <meta name="csrf-token" content="SMdqpFkb9nUMfuMDgYIWeJbGS8JLNBeHBjV9uG4X/9jg36MJIEDc2vOHcBmXeHeDSlSLPfKSAQNoLH8L8o1Bcw==" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="/assets/application-83c9c87c1a264e43b48ca4c61316427d6ca76973618bb2a749826f4b9206127d.css" media="all" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="importmap" data-turbo-track="reload">{
      "imports": {
        "@hotwired/turbo-rails": "/assets/turbo.min-eef6d0d72563b8765529b3f72bffff1fb8dcdd7f6a0eb025a2478c06e030d1cf.js",
        "application": "/assets/application-4b9d90546cdef657573ebf282d13f6bdc31c6cdca6cbee6b1db41e48a65d5d60.js"
      }
    }</script>
    <link rel="modulepreload" href="/assets/turbo.min-eef6d0d72563b8765529b3f72bffff1fb8dcdd7f6a0eb025a2478c06e030d1cf.js">
    <script src="/assets/es-module-shims.min-d89e73202ec09dede55fb74115af9c5f9f2bb965433de1c2446e1faa6dac2470.js" async="async" data-turbo-track="reload"></script>
    <script type="module">import "application"</script>

    @yield('css')


</head>
<body>
<div class="wrapper-main">
    @include('home._header')

    {{-- @include('home._menu') --}}

    @yield('content')

    @include('home._footer')
</div>

<!-- Bootstrap core JavaScript -->
<noscript>
          <img src="https://shy.cia.li/ingress/1f07284f-8098-4b50-b2a4-852be648f3d5/pixel.gif">
        </noscript>
    <script defer src="https://shy.cia.li/ingress/1f07284f-8098-4b50-b2a4-852be648f3d5/script.js"></script>
@yield('javascript')
</body>
</html>
