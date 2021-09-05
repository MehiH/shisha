@extends('main')

@section('style')
<link href="{{ asset('about/lib/animate/animate.min.css')}}" rel="stylesheet">
<link href="{{ asset('about/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
<link href="{{ asset('about/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
<link href="{{ asset('about/lib/lightbox/css/lightbox.min.cs')}}s" rel="stylesheet">

<!-- Main Stylesheet File -->
<link href="{{ asset('about/css/style.css')}}" rel="stylesheet">

    <style>
       header {
          height: 5vh;
          min-height: 200px;
          background-size: cover;
          background-image: url(../images/icon/giphy.gif);
      }
      .why-us-content{
        font-size: 22px;

      }
      .shisha_desc {
        font-size: 27px;
      }
      .coctail_desc {
        font-size: 27px;
      }
      .food_desc {
        font-size: 24px;
      }
      .venu_desc {
        font-size: 26px;
      }
    </style>
@endsection
@section('header_desc')

@endsection

@section('content')
    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container-fluid">
        
        <div class="section-header">
          <h3>You Don't Have Permission !</h3>
        </div>
      </div>
    </section>

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
