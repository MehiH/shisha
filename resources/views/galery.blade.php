@extends('main')

@section('style')
<link href="{{ asset('about/lib/animate/animate.min.css')}}" rel="stylesheet">
<link href="{{ asset('about/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
<link href="{{ asset('about/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
<link href="{{ asset('about/lib/lightbox/css/lightbox.min.cs')}}s" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
    <style>
      body{
        font-family: 'Redressed', cursive;
      }
       header {
          height: 80vh;
          min-height: 300px;
          background-size: cover;
          background-image: url(../images/gallery/food/bg.jpg);
      }
      .link-preview{
        background:#050505;
      }
      @media (max-width:767px) {
        #video_background{
          width:255%;
        }

      }
    </style>
@endsection
@section('header_desc')
<video id="video_background" width="100%" height="auto" playsinline autoplay muted loop>
  <source src="{{asset('/images/gallery/food/food.mp4')}}" type="video/mp4">
  <source src="{{asset('videos/intro.ogg')}}" type="video/ogg">
</video>
  <div id="gallery_desc">
        <div class="row">
            <div class="col-md-5 info_desc">
                <div id="">
                    <h2>KITCHEN GALLERY</h2>
                    <h4>Chase the flavors</h4>
                    <p>
                    We offer delicious food from various cuisines to please the taste buds. 
                    Our dedicated chefs prepare  appetising dishes with the best ingredients possible.
                    If you are after a quick snack or a main course, your taste buds will be in good 
                    hands at Shisha Room.
                    </p>
                </div>
            </div>    
        </div>
    </div>
@endsection

@section('content')
<br>
<br>
<br>

    <!--==========================
      Portfolio Sectio
    ============================-->
    <section id="portfolio" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title"></h3>
        </div>

        <div class="row">
          <div class="col-lg-12">
          
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('images/gallery/food/1.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#"></a></h4>
                <p></p>
                <div>
                  <a href="{{asset('images/gallery/food/1.jpg')}}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="{{asset('images/gallery/food/2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#"></a></h4>
                <p></p>
                <div>
                  <a href="{{asset('images/gallery/food/2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{asset('images/gallery/food/3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#"></a></h4>
                <p></p>
                <div>
                  <a href="{{asset('images/gallery/food/3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('images/gallery/food/4.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#"></a></h4>
                <p></p>
                <div>
                  <a href="{{asset('images/gallery/food/4.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="{{asset('images/gallery/food/5.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#"></a></h4>
                <p></p>
                <div>
                  <a href="{{asset('images/gallery/food/5.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{asset('images/gallery/food/6.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#"></a></h4>
                <p></p>
                <div>
                  <a href="{{asset('images/gallery/food/6.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('images/gallery/food/7.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#"></a></h4>
                <p></p>
                <div>
                  <a href="{{asset('images/gallery/food/7.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="{{asset('images/gallery/food/8.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#"></a></h4>
                <p></p>
                <div>
                  <a href="{{asset('images/gallery/food/8.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{asset('images/gallery/food/9.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#"></a></h4>
                <p></p>
                <div>
                  <a href="{{asset('images/gallery/food/9.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{asset('images/gallery/food/10.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#"></a></h4>
                <p></p>
                <div>
                  <a href="{{asset('images/gallery/food/10.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{asset('images/gallery/food/11.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#"></a></h4>
                <p></p>
                <div>
                  <a href="{{asset('images/gallery/food/11.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{asset('images/gallery/food/12.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#"></a></h4>
                <p></p>
                <div>
                  <a href="{{asset('images/gallery/food/12.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{asset('images/gallery/food/13.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#"></a></h4>
                <p></p>
                <div>
                  <a href="{{asset('images/gallery/food/13.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{asset('images/gallery/food/14.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#"></a></h4>
                <p></p>
                <div>
                  <a href="{{asset('images/gallery/food/14.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{asset('images/gallery/food/15.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#"></a></h4>
                <p></p>
                <div>
                  <a href="{{asset('images/gallery/food/15.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> 
    <!-- #portfolio -->
@endsection
@section('script')
    <!-- <script>
        $(document).ready(function(){
          $(document).on("click", '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
          });

          $(document).scroll(function () {
            var $nav = $(".navigation");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height()+400);
          });
            
        });
    </script> -->

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
