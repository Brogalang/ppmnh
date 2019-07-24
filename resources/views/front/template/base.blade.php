<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PPM NH</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{url('/assets/front/fonts/icomoon/style.css')}}">
   <!--  href="{{url('/assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" -->
   <!-- src="{{url('assets/admin/bower_components/jquery/dist/jquery.min.js')}}" -->

    <link rel="stylesheet" href="{{url('/assets/front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/assets/front/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('/assets/front/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{url('/assets/front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('/assets/front/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('/assets/front/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{url('/assets/front/css/animate.css')}}">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
    <link rel="stylesheet" href="{{url('/assets/front/fonts/flaticon/font/flaticon.css')}}">
  
    <link rel="stylesheet" href="{{url('/assets/front/css/aos.css')}}">

    <link rel="stylesheet" href="{{url('/assets/front/css/style.css')}}">

    <style>
      #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 98;
        border: none;
        outline: none;
        background-color: none;
        color: none;
        cursor: pointer;
        padding: 15.9px;
        border-radius: circle;
      }

      #myBtn:hover {
        background-color: none;
      }

      .button-flat-circle {
        border: 1px solid none;        /* border: tebal[px] tipe[solid,dashed,dotted] warna[#hex, rgb()]; */
        background-color: white;        /* ubah warna background */
        color: none;                   /* ubah warna font */
        font-size: none;                  /* ubah ukuran font */
        width: 15.9px;                     /* set panjang button. ukuran width = ukuran height */
        height: 15.9px;                    /* set tinggi button. ukuran width = ukuran height */
        line-height: 15.9px;                /* set line height = font size */
        text-align: center;               /* text posisi center */
        border-radius: 15.9px;               /* set radius sudut pada button */
      }
      .button-flat-circle:hover {
        opacity: 0.5;                     /* ubah tingkat transparansi saat cursor menuju button. 0.0 s.d 1.0 */ 
      }
      .button-flat-circle:active {
        background: #4d667d;              /* ubah background saat button ditekan */
      }
    </style>
    
  </head>
  <body>
  
  <button class="button-flat-circle" onclick="topFunction()" id="myBtn" title="Go to top" style="background-image: url(assets/front/images/arrow.jpg);"></button>
  <!-- src="{{ asset('images/default.png') }}" -->

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    <!-- navbar -->
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="index.html">PPM NH</a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li class="active">
                        <a href="index.html">Home</a>
                      </li>
                      <li class="has-children">
                        <a href="beliefs.html">About</a>
                        <ul class="dropdown arrow-top">
                          <li><a href="beliefs.html">Visi dan Misi</a></li>
                          <li><a href="beliefs.html">Sejarah PPM NH</a></li>
                          <li><a href="beliefs.html">Why Join PPM NH ?</a></li>
                        </ul>
                      </li>
                      <li><a href="events.html">Santri</a></li>
                      <li><a href="about.html">Guru</a></li>
                      <li><a href="{{url('/home')}}">Login</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end navbar -->

    <!-- content -->
    @yield('content')
    <!-- end content -->

    <!-- footer -->
   	@include('front.template.footer')
    <!-- end footer -->
  </div>

  <script src="{{url('/assets/front/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{url('/assets/front/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{url('/assets/front/js/jquery-ui.js')}}"></script>
  <script src="{{url('/assets/front/js/popper.min.js')}}"></script>
  <script src="{{url('/assets/front/js/bootstrap.min.js')}}"></script>
  <script src="{{url('/assets/front/js/owl.carousel.min.js')}}"></script>
  <script src="{{url('/assets/front/js/jquery.stellar.min.js')}}"></script>
  <script src="{{url('/assets/front/js/jquery.countdown.min.js')}}"></script>
  <script src="{{url('/assets/front/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{url('/assets/front/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{url('/assets/front/js/aos.js')}}"></script>

  
  <script src="{{url('/assets/front/js/mediaelement-and-player.min.js')}}"></script>

  <script src="{{url('/assets/front/js/main.js')}}"></script>
    
  <script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("myBtn").style.display = "block";
    } else {
      document.getElementById("myBtn").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  </script>

  <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>

  </body>
</html>