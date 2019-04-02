<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard  | MRAP Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSSz
		============================================ -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.transitions.css')}}">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/meanmenu/meanmenu.min.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/normalize.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/jvectormap/jquery-jvectormap-2.0.3.css')}}">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/notika-custom-icon.css')}}">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/wave/waves.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{url('js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
</head>
<body>

<div class="img-fluid" style="background-image: url('http://mooresrowland-asiapac.com/memberarea/img/1.jpeg');background-size: cover; background-repeat:no-repeat;max-height:400px;">
<div class="top-content">
  <nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand"> <img src="{{asset('img/logo-white.png')}}" class="img-logo"/></a>

      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="top-navbar-1">
        <ul class="nav navbar-nav navbar-right" style="font-size:9pt;">
          <li><a href="/memberarea/home">Home</a></li>
          <li><a href="/memberarea/roles">Roles</a></li>
          <li><a href="/memberarea/users">User</a></li>
          <li><a href="/memberarea/resources">Resources</a></li>
          <li><a href="/memberarea/setting">Site Setting</a></li>
          <li class="dropdown tes">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="background-color: inherit;">{{Auth::User()->name}} <span class="caret"></span></a>
            <ul class="dropdown-menu" style="background-color: inherit;">
            <li><a href="/memberarea/logout" stlye="color:#000000;">Logout</a></li>
        </ul>
      </div>
    </div>
    </div>
  </nav>

      @yield('banner')
        </div>
<div class="container" style="margin-top:40px;"></div>


<div class="breadcomb-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="breadcomb-list">
          @yield('labelhome')
          @yield('labeluser')
          @yield('labelroles')
          @yield('labelresources')
          @yield('labelsite')
        </div>
      </div>
    </div>
  </div>
</div>

<div class="data-table-area">
  <div class="container">
    @yield('working')
    @yield('user')
    @yield('roles')
    @yield('home')
    @yield('resources')
    @yield('site')
  </div>
</div>


<div class="footer">
   Copyright © 2019
. All rights reserved.</div>

 <!-- bootstrap JS
 ============================================ -->
 <!-- <script src="{{url('js/bootstrap.min.js')}}"></script> -->
 <!-- wow JS
 ============================================ -->
 <script src="{{url('js/bootstrap.min.js')}}"></script>
 <!-- wow JS
 ============================================ -->
 <script src="{{url('js/wow.min.js')}}"></script>
 <!-- price-slider JS
 ============================================ -->
 <script src="{{url('js/jquery-price-slider.js')}}"></script>
 <!-- owl.carousel JS
 ============================================ -->
 <script src="{{url('js/owl.carousel.min.js')}}"></script>
 <!-- scrollUp JS
 ============================================ -->
 <script src="{{url('js/jquery.scrollUp.min.js')}}"></script>
 <!-- meanmenu JS
 ============================================ -->
 <script src="{{url('js/meanmenu/jquery.meanmenu.js')}}"></script>
 <!-- counterup JS
 ============================================ -->
 <script src="{{url('js/counterup/jquery.counterup.min.js')}}"></script>
 <script src="{{url('js/counterup/waypoints.min.js')}}"></script>
 <script src="{{url('js/counterup/counterup-active.js')}}"></script>
 <!-- mCustomScrollbar JS
 ============================================ -->
 <script src="{{url('js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
 <!-- jvectormap JS
 ============================================ -->
 <script src="{{url('js/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
 <script src="{{url('js/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
 <script src="{{url('js/jvectormap/jvectormap-active.js')}}"></script>
 <!-- sparkline JS
 ============================================ -->
 <script src="{{url('js/sparkline/jquery.sparkline.min.js')}}"></script>
 <script src="{{url('js/sparkline/sparkline-active.js')}}"></script>
 <!-- sparkline JS
 ============================================ -->
 <script src="{{url('js/flot/jquery.flot.js')}}"></script>
 <script src="{{url('js/flot/jquery.flot.resize.js')}}"></script>
 <script src="{{url('js/flot/curvedLines.js')}}"></script>
 <script src="{{url('js/flot/flot-active.js')}}"></script>
 <!-- knob JS
 ============================================ -->
 <script src="{{url('js/knob/jquery.knob.js')}}"></script>
 <script src="{{url('js/knob/jquery.appear.js')}}"></script>
 <script src="{{url('js/knob/knob-active.js')}}"></script>
 <!--  wave JS
 ============================================ -->
 <script src="{{url('js/wave/waves.min.js')}}"></script>
 <script src="{{url('js/wave/wave-active.js')}}"></script>
 <!--  todo JS
 ============================================ -->
 <script src="{{url('js/todo/jquery.todo.js')}}"></script>
 <!-- plugins JS
 ============================================ -->
 <script src="{{url('js/plugins.js')}}"></script>

 <!-- main JS
 ============================================ -->
 <script src="{{url('js/main.js')}}"></script>


 <!-- main JS
 ============================================ -->
 <!-- <script src="{{url('js/main.js')}}"></script> -->

 </body>
 <style>
 .footer {
  right: 0;
  bottom: 0;
  left: 0;
  text-align: center;
  padding: 1rem;
  color: white;
  background-color: #20213f;
  margin-bottom: -20px;
}
.footer a{
  color: white;
}
.dropdown-menu>li>a:hover {
  background-color: inherit;
}
/* .navbar-inverse ul.navbar-nav li a:focus {
  background-color: #000;
} */
 </style>
