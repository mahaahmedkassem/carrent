
<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/carrental/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('assets/carrental/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/carrental/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/carrental/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/carrental/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/carrental/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/carrental/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/carrental/css/aos.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('assets/carrental/css/style.css')}}">

  </head>
<!-- ////////////////////////////////////////////////////// -->
  <body>
   <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <header class="site-navbar site-navbar-target" role="banner">
        <div class="container">
          <div class="row align-items-center position-relative">
            <div class="col-3">
              <div class="site-logo">
                <a href="{{route('index')}}"><strong>CarRental</strong></a>
              </div>
            </div>
            <div class="col-9  text-right">
              <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="{{route('index')}}" class="nav-link">Home</a></li>
                  <li><a href="{{route('listing')}}" class="nav-link">Listing</a></li>
                  <li><a href="{{route('Testimonials')}}" class="nav-link">Testimonials</a></li>
                  <li><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
                  <li><a href="{{route('about')}}" class="nav-link">About</a></li>
                  <li><a href="{{route('createemail')}}" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>

      </header>
      <!-- /////////////////////////////// -->

      
             
  
      <!--  -->
      
      <div class="hero" style="background-image: url('{{asset('assets/carrental/images/hero_1_a.jpg')}}">
        
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-10">

              <div class="row mb-5">
                <div class="col-lg-7 intro">
                  <h1><strong>@yield('title')</strong>  </h1>
                  
                </div>
              </div>

            <!-- </div>
          </div>
        </div>
      </div> -->
    <!-- ///////////////////////////////////////// -->


      @yield('content')
    <!-- /////////////////////////// -->
      
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <h2 class="footer-heading mb-4">About Us</h2>
              <p>maha ahmed kassem <br>mobile: 01110087001 </p>
              <ul class="list-unstyled social">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
              </ul>
            </div>
            <div class="col-lg-8 ml-auto">
              <div class="row">
                <div class="col-lg-3">
                  <h2 class="footer-heading mb-4">Quick Links</h2>
                  <ul class="list-unstyled">
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('Testimonials')}}">Testimonials</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="{{route('createemail')}}">Contact Us</a></li>
                  </ul>
                </div>
                <div class="col-lg-3">
                  <h2 class="footer-heading mb-4">Resources</h2>
                  <ul class="list-unstyled">
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('Testimonials')}}">Testimonials</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="{{route('createemail')}}">Contact Us</a></li>
                  </ul>
                </div>
                <div class="col-lg-3">
                  <h2 class="footer-heading mb-4">Support</h2>
                  <ul class="list-unstyled">
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('Testimonials')}}">Testimonials</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="{{route('createemail')}}">Contact Us</a></li>
                  </ul>
                </div>
                <div class="col-lg-3">
                  <h2 class="footer-heading mb-4">Company</h2>
                  <ul class="list-unstyled">
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('Testimonials')}}">Testimonials</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="{{route('createemail')}}">Contact Us</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <div class="border-top pt-5">
                <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
              </div>
            </div>

          </div>
        </div>
      </footer>
 



      <!-- ////////// -->
    </div>
    <script src="{{asset('assets/carrental/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/carrental/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/carrental/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/carrental/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/carrental/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('assets/carrental/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/carrental/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('assets/carrental/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('assets/carrental/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('assets/carrental/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/carrental/js/aos.js')}}"></script>

    <script src="{{asset('assets/carrental/js/main.js')}}"></script>
  </body>

</html>

