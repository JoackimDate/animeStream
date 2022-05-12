<!doctype html>
<html lang="en-US">
   <head>
      <!-- Required meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Streamit</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style -->
      <link rel="stylesheet" href="css/style.css" />
      <!-- Responsive -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- swiper -->
      <link rel="stylesheet" href="css/swiper.min.css">
      <link rel="stylesheet" href="css/swiper.css">
   </head>
   <body>
       <!-- back-to-top -->
      <div id="back-to-top">
        <a class="top" href="#top" id="top"> <i class="fa fa-angle-up"></i> </a>
     </div>
    
    <div class="nav-bar"> @include("Stream.header")</div>

    <div class="header">@yield('header')</div>
    
    <div class="content">@yield('content')</div>
     
    <div class="footer">@include("Stream.footer")</div>
     





     <!-- back-to-top End -->
     <!-- jQuery, Popper JS -->
     <script src="js/jquery-3.5.1.min.js"></script>
     <script src="js/popper.min.js"></script>
     <!-- Bootstrap JS -->
     <script src="js/bootstrap.min.js"></script>
     <!-- owl carousel Js -->
     <script src="js/owl.carousel.min.js"></script>
     <!-- select2 Js -->
     <script src="js/select2.min.js"></script>
     <!-- Magnific Popup-->
     <script src="js/jquery.magnific-popup.min.js"></script>
     <!-- Custom JS-->
     <script src="js/custom.js"></script>
     <script src="js/rtl.js"></script>
     <!-- gsap JS -->
     <script src="plugin/gsap/gsap.min.js"></script>
     <script src="js/gsap-scripts.js"></script>
     <!-- Swiper JS -->
     <script src="js/swiper.min.js"></script>
     <script src="js/swiper.js"></script>
  </body>
</html>