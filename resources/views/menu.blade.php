@extends('main1')

@section('style')
<link href="{{ asset('about/lib/animate/animate.min.css')}}" rel="stylesheet">
<link href="{{ asset('about/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
<link href="{{ asset('about/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
<link href="{{ asset('about/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

<!-- Main Stylesheet File -->
<!-- <link href="{{ asset('about/css/style.css')}}" rel="stylesheet"> -->

    <style>
      header {
          height: 0px;
          min-height: 0px;
          background-size: cover;
          background-image: url(../about/img/presentation-background.jpg);
      }
    </style>
@endsection
@section('header_desc')
@endsection

@section('content')
<!-- <embed src="{{ asset('pdf/Shisha-Menu.pdf')}}" type="application/pdf" width="100%" height="650px"/> -->
<!-- <img src="{{ asset('pdf/Shisha-Menu-1.jpg')}}" class="img-fluid" alt="Responsive image">
<br>
<br>
<img src="{{ asset('pdf/Shisha-Menu-2.jpg')}}" class="img-fluid" alt="Responsive image">
<br>
<br>
<img src="{{ asset('pdf/Shisha-Menu-3.jpg')}}" class="img-fluid" alt="Responsive image">
<br>
<br>
<img src="{{ asset('pdf/Shisha-Menu-4.jpg')}}" class="img-fluid" alt="Responsive image">
<br>
<br>
<img src="{{ asset('pdf/Shisha-Menu-5.jpg')}}" class="img-fluid" alt="Responsive image">
<br>
<br>
<img src="{{ asset('pdf/Shisha-Menu-6.jpg')}}" class="img-fluid" alt="Responsive image"> -->
<img src="{{ asset('pdf/Menu_Shisha-1.jpg')}}" class="img-fluid" alt="Responsive image">
@endsection
@section('script')
    <script>
        $(document).ready(function(){
          $(document).scroll(function () {
            var $nav = $(".navigation");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height()+400);
          });
            
        });
    </script>
      
  <!-- JavaScript Libraries -->
  <script src="{{ asset('about/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('about/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{ asset('about/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('about/lib/easing/easing.min.js')}}"></script>
  <!-- <script src="{{ asset('about/lib/mobile-nav/mobile-nav.js')}}"></script> -->
  <script src="{{ asset('about/lib/wow/wow.min.js')}}"></script>
  <script src="{{ asset('about/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{ asset('about/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{ asset('about/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('about/lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('about/lib/lightbox/js/lightbox.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('about/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('about/js/main.js')}}"></script>
@endsection
