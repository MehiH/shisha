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
          height: 80vh;
          min-height: 300px;
          background-size: cover;
          background-image: url(../about/img/presentation-background.jpg);
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
  <div id="gallery_desc">
        <div class="row">
            <div class="col-md-5 info_desc">
                <div id="">
                    <h2>About Us</h2>
                    <!-- <h4>Making Memories</h4> -->
                    <p>
                    Shisha Room offers the highest quality of shisha’s. 
                    That’s the essence of what we do – but it hardly tells the whole story. 
                    From the beginning, we set out to be a different kind of company. 
                    One that not only celebrates shisha and the rich tradition, but that also brought a modern touch 
                    to that experience. 
                    </p>
                </div>
            </div>    
        </div>
    </div>
@endsection

@section('content')
    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container-fluid">
        
        <div class="section-header">
          <h3>Expect More Than Shisha</h3>
          <p>We are passionate not just about shishas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="why-us-img">
              <img src="{{ asset('about/img/why-us.jpg')}}" alt="" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-6">
            <div class="why-us-content">
              <p>
              We are not just passionate about shishas but everything else that goes with entertaining lounge experience. 
              Whether you are looking to have a pleasant drink during the weekdays or you’re after some pre-club cocktails 
              during the weekend, Shisha Room is the place to be. 
              </p>
              <p>
              We offer a wide selection of classic and signature cocktails and delicious food from various cuisines to please 
              the taste buds. And the music we play is handpicked  to compliment the atmosphere at our venue.
              </p>

              <!-- <div class="features wow bounceInUp clearfix">
                <i class="fa fa-diamond" style="color: #f058dc;"></i>
                <h4>Corporis dolorem</h4>
                <p>Commodi quia voluptatum. Est cupiditate voluptas quaerat officiis ex alias dignissimos et ipsum. Soluta at enim modi ut incidunt dolor et.</p>
              </div>

              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-object-group" style="color: #ffb774;"></i>
                <h4>Eum ut aspernatur</h4>
                <p>Molestias eius rerum iusto voluptas et ab cupiditate aut enim. Assumenda animi occaecati. Quo dolore fuga quasi autem aliquid ipsum odit. Perferendis doloremque iure nulla aut.</p>
              </div>
              
              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-language" style="color: #589af1;"></i>
                <h4>Voluptates dolores</h4>
                <p>Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum aspernatur. Totam dolores ut enim ullam voluptas distinctio aut.</p>
              </div> -->
              
            </div>

          </div>

        </div>

      </div>

      <div class="container">
        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">SH</span>
            <p>SHISHA</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">C</span>
            <p>COCKTAILS</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">F</span>
            <p>FOOD</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">V</span>
            <p>VENUE</p>
          </div>
  
        </div>

      </div>
    </section>

    <!--==========================
      Features Section
    ============================-->
    <section id="features">
      <div class="container">

        <div class="row feature-item">
          <div class="col-lg-6 wow fadeInUp">
            <img src="{{ asset('about/img/shisha.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0 shisha_desc">
            <h4 align="left">SHISHA</h4>
            <br>
            <p>
              Organic, authentic and exotic! We serve the finest quality of shisha in the most unique and contemporary equipment. 
            </p>
            <p>
              We have over 200 flavour combinations from the world’s best brands. Experience shisha like you have never done before.

            </p>
          </div>
        </div>

        <div class="row feature-item mt-5 pt-5">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="{{ asset('about/img/drink.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1 coctail_desc">
            <h4 align="right">COCKTAILS</h4>
            <br>
            <p align="right">
              Every drink is crafted by our in-house senior mixologist's who take great pride in the art of creating a perfect cocktail. 
            </p>
            <p align="right">
              The cocktails and great shisha pair perfectly with our food menu. 
            </p>
          </div>
          
        </div>

        <div class="row feature-item mt-5 pt-5">
          <div class="col-lg-6 wow fadeInUp">
            <img src="{{ asset('about/img/food.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0 food_desc">
            <h4>FOOD</h4>
            <br>
            <p>
              We offer delicious food from various cuisines to please the taste buds. Our dedicated chefs prepare  appetising dishes with the best ingredients possible.  
            </p>
            <p>
              If you are after a quick snack or a main course, your taste buds will be in good hands at Shisha Room.

            </p>
          </div>
        </div>

        <div class="row feature-item mt-5 pt-5">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="{{ asset('about/img/venu.jpg')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1 venu_desc">
            <h4 align="right">VENUE</h4>
            <br>
            <p align="right">
            We are best known for the eclectic design of our venue and contemporary shisha which captures 
            the hearts of Tirana’s elite social groups. Our venue fuses the appeal of an ultra exclusive lounge.
            We boast plush seating, a great atmosphere and music with sensual lighting. 
            The experience is unparalleled.

            </p>
          </div>
          
        </div>

      </div>
    </section>
    <!-- #about -->

    <!--==========================
      Portfolio Sectio
    ============================-->
    <!-- <section id="portfolio" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </div>

        <div class="row">
          <div class="col-lg-12">
          
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('about/img/portfolio/app1.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
                <div>
                  <a href="{{ asset('about/img/portfolio/app1.jpg')}}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="{{ asset('about/img/portfolio/web3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
                <div>
                  <a href="{{ asset('about/img/portfolio/web3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{ asset('about/img/portfolio/app2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
                <div>
                  <a href="{{ asset('about/img/portfolio/app2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('about/img/portfolio/card2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
                <div>
                  <a href="{{ asset('about/img/portfolio/card2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="{{ asset('about/img/portfolio/web2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
                <div>
                  <a href="{{ asset('about/img/portfolio/web2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{ asset('about/img/portfolio/app3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
                <div>
                  <a href="{{ asset('about/img/portfolio/app3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('about/img/portfolio/card1.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
                <div>
                  <a href="{{ asset('about/img/portfolio/card1.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="{{ asset('about/img/portfolio/card3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
                <div>
                  <a href="{{ asset('about/img/portfolio/card3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{ asset('about/img/portfolio/web1.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
                <div>
                  <a href="{{ asset('about/img/portfolio/web1.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials">
      <!-- <div class="container">

        <div class="section-header">
          <h3>Testimonials</h3>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
    
              <div class="testimonial-item">
                <img src="{{ asset('about/img/testimonial-1.jpg')}}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="{{ asset('about/img/testimonial-2.jpg')}}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="{{ asset('about/img/testimonial-3.jpg')}}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="{{ asset('about/img/testimonial-4.jpg')}}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
              </div>

            </div>

          </div>
        </div>


      </div> -->
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <!-- <section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3>Team</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="{{asset('about/img/team-1.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href=""><i class="fab fa-facebook social_icon"></i></a>
                    <a href=""><i class="fab fa-instagram social_icon"></i></a>
                    <a href=""><i class="fab fa-linkedin social_icon"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="{{ asset('about/img/team-2.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href=""><i class="fab fa-facebook social_icon"></i></a>
                    <a href=""><i class="fab fa-instagram social_icon"></i></a>
                    <a href=""><i class="fab fa-linkedin social_icon"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="{{asset('about/img/team-3.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="fab fa-facebook social_icon"></i></a>
                    <a href=""><i class="fab fa-instagram social_icon"></i></a>
                    <a href=""><i class="fab fa-linkedin social_icon"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="{{ asset('about/img/team-4.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fab fa-facebook social_icon"></i></a>
                    <a href=""><i class="fab fa-instagram social_icon"></i></a>
                    <a href=""><i class="fab fa-linkedin social_icon"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- #team -->

    <!--==========================
      Clients Section
    ============================-->
    <!-- <section id="clients" class="wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Our Clients</h3>
        </div>

        <div class="owl-carousel clients-carousel">
          <img src="{{ asset('about/img/clients/client-1.png')}}" alt="">
          <img src="{{ asset('about/img/clients/client-2.png')}}" alt="">
          <img src="{{ asset('about/img/clients/client-3.png')}}" alt="">
          <img src="{{ asset('about/img/clients/client-4.png')}}" alt="">
          <img src="{{ asset('about/img/clients/client-5.png')}}" alt="">
          <img src="{{ asset('about/img/clients/client-6.png')}}" alt="">
          <img src="{{ asset('about/img/clients/client-7.png')}}" alt="">
          <img src="{{ asset('about/img/clients/client-8.png')}}" alt="">
        </div>

      </div>
    </section> -->
    <!-- #clients -->


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
