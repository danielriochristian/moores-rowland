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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400|Roboto:300,400,500">
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
          <li><a href="/memberarea/dashboard">Home</a></li>
            <!-- <li><a href="#">Meeting</a></li> -->
            <li><a href="/memberarea/resource">Resources</a></li>
            <!-- <li><a href="#">Calendar</a></li> -->
            <li><a href="/memberarea/workinggroup">Working Groups</a></li>
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

<!-- label atas -->
<div class="breadcomb-area">
 <div class="container">
   <div class="row">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       <div class="breadcomb-list">
         @yield('labelworking')
         @yield('labelresource')
         @yield('labeltax')
         @yield('labelpay')
         @yield('labelfinance')
         @yield('labelaudit')
         @yield('labelhome')
       </div>
     </div>
   </div>
  </div>
</div>

<!-- isi -->
<div class="data-table-area">
   <div class="container">
     @yield('home')
     @yield('working')
     @yield('tax')
     @yield('payroll')
     @yield('finance')
     @yield('audit')
     @yield('resource')
   </div>
</div>



 <!--<div class="footer-copyright-area">-->
 <!--    <div class="container">-->
 <!--        <div class="row" >-->
 <!--            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >-->
 <!--                <div class="footer-copy-right">-->
 <!--                    <p>Copyright © 2019-->
 <!--. All rights reserved.</p>-->
                     <!--Design by <a href="https://instagram/danielriochristian">Mr Arrogant</a>.-->
 <!--                </div>-->
 <!--            </div>-->
 <!--        </div>-->
 <!--    </div>-->
 <!--</div>-->

<div class="footer">
   Copyright © 2019
. All rights reserved.</div>


 <script src="{{url('js/vendor/jquery-1.12.4.min.js')}}"></script>
 <!-- bootstrap JS
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
</style>
