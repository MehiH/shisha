
<div id="homepage-page" class="page">
    <div class="cineslider-container">
        <div class="cineslider-wrapper">
            <div id="homepage-introduction" class="cineslider-slide">
                <div class="border" data-position="top"></div>
                <div class="border" data-position="right"></div>
                <div class="border" data-position="left"></div>
                <div class="border" data-position="bottom"></div>
                <div class="intro-paragraph">
                    <p></p>
                    <p></p>
                </div>
                <div class="videobg-container"></div>
                <div class="starwars-container">
                    <div class="starwars-wrapper">
                        
                        <p><br><br></p>
                        <p><br><br></p>
                        <!-- <p>Bar & Hookah Longue</p> -->
                        <p><br><br></p><p><br><br></p>

                        <p style="white-space: normal">
                           <!-- Shisha Room <strong></strong> -->
                        </p>
                    </div>
                </div>

                <a href="#" class="scroll-down">
                    <i class="icon"></i>
                    <span>scroll down</span>
                </a>
            </div>

            <div id="homepage-event" class="cineslider-slide">
                <div class="background"></div>
                <div class="video-popup">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div></div>
                            <div class="video-popup-overlay">
                                <video class="video-js vjs-default-skin"
                                    controls preload="none" width="100%" height="100%" data-setup='{"example_option":true}'>
                                   <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                                </video>
                            </div>
                            <div id="event_container">
                                <div class="row">
                                    <div class="col-md-12 event_desc">
                                        <div id="event_text_desc">
                                            <h2>SHISHAROOM</h2>
                                            <h4>Making Memories</h4>
                                            <p>
                                                Best venue prides itself on hiring very passionate and creative individuals. 
                                                No matter what your dream is for your special event, we will help you achieve your vision.
                                                Our venue fuses the appeal of an ultra exclusive lounge.
                                                We boast plush seating, a great atmosphere and music with sensual lighting. 
                                            </p>
                                            <br>
                                            <br>
                                            <a href="{{ route('venue') }}"><div class="button_cont learn_more" align="center" style="width:auto">
                                                Make a Reservation
                                            </div></a>
                                            
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>

                    </div>
                    <a href="#" class="video-popup-close"></a>
                </div>
                <a href="#" class="scroll-down">
                    <i class="icon"></i>
                    <span>scroll down</span>
                </a>
            </div>

            <div id="homepage-menu" class="cineslider-slide" data-menu-invert="true">
                <div class="border" data-position="top"></div>
                <div class="border" data-position="right"></div>
                <div class="border" data-position="left"></div>
                <div class="border" data-position="bottom"></div>
                <h1 class="title"></h1>

                <div class="swiper-container toggle">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-name="human" data-start="16" data-end="37">
                            <div class="swiper-slide-wrapper">
                                <p data-swiper-parallax-y="-100" class="swiper-slide-wrapper-one" data-swiper-parallax-duration="1200">    
                                    <!-- <a href="{{ route('gallery_shisha') }}"> -->
                                        <div id="shishaGalery">
                                           <div class="button_cont a-n2" align="center" style="width:70%" data-id="gallery_shisha" >Gallery</div>
                                        </div>
                                    <!-- </a> -->
                                </p>
                                <p data-swiper-parallax-y="-100" class="swiper-slide-wrapper-one" data-swiper-parallax-duration="1200">
                                    <a href="{{ asset('images/menu/sh1.png')}}" data-lightbox="menu_shisha" align="center" data-title="Menu Shisha" class="link-preview a-n2" style="width:70%" title="Menu">Shisha Menu</a>
                                </p>
                                <div class="p-line" data-swiper-parallax-x="100%" data-swiper-parallax-duration="1200"></div>
                            </div>
                        </div>

                        <div class="swiper-slide" data-name="brain" data-start="38" data-end="61">
                            <div class="swiper-slide-wrapper">
                                <p data-swiper-parallax-y="-100" class="swiper-slide-wrapper-two" data-swiper-parallax-duration="1200">
                                    <!-- <a href="{{ route('gallery_coctail') }}"> -->
                                        <div id="coctailGalery">
                                            <div class="button_cont a-n3" align="center" style="width:80%" data-id="gallery_coctail" >
                                                Gallery
                                            </div>
                                        </div>
                                    <!-- </a> -->
                                </p>
                                <p data-swiper-parallax-y="-100" class="swiper-slide-wrapper-two" data-swiper-parallax-duration="1200">
                                    <a href="{{ asset('images/menu/sh2.png')}}" data-lightbox="menu_coctail" align="center" data-title="Cocktail Menu" class="link-preview a-n3" style="width:70%" title="Menu">
                                        Cocktail Menu
                                    </a>
                                    <a href="{{ asset('images/menu/sh3.png')}}" data-lightbox="menu_coctail" data-title="Cocktail Menu" class="link-preview"  title="Menu" hidden></a>
                                    <a href="{{ asset('images/menu/sh4.png')}}" data-lightbox="menu_coctail" data-title="Cocktail Menu" class="link-preview"  title="Menu" hidden></a>
                                </p>
                                <div class="p-line" data-swiper-parallax-x="100%" data-swiper-parallax-duration="1200"></div>
                            </div>
                        </div>

                        <div class="swiper-slide" data-name="puzzle" data-start="62" data-end="94">
                            <div class="swiper-slide-wrapper">
                                <p data-swiper-parallax-y="-100" class="swiper-slide-wrapper-one" data-swiper-parallax-duration="1200">
                                    <!-- <a href="{{ route('galery') }}"> -->
                                        <div id="restorantGalery">
                                            <div class="button_cont a-n2" align="center" style="width:80%" data-id="gallery_restorant">
                                                Gallery
                                            </div>     
                                        </div>
                                    <!-- </a> -->
                                    <br>
                                </p>
                                <p data-swiper-parallax-y="-100" class="swiper-slide-wrapper-one" data-swiper-parallax-duration="1200">
                                    <a href="{{ asset('images/menu/sh5.png')}}" data-lightbox="menu_restorant" align="center" data-title="Restorant Menu" class="link-preview a-n2" style="width:70%" title="Menu">
                                        Kitchen Menu
                                    </a>
                                    <a href="{{ asset('images/menu/sh6.png')}}" data-lightbox="menu_restorant" data-title="Cocktail Menu" class="link-preview"  title="Menu" hidden></a>
                                </p>
                                <div class="p-line" data-swiper-parallax-x="100%" data-swiper-parallax-duration="1200"></div>
                            </div>
                        </div>

                        
                    </div>
                </div>

                <a href="#" class="scroll-down invert">
                    <i class="icon"></i>
                    <span>scroll down</span>
                </a>
            </div>
            <div id="homepage-about-us" class="cineslider-slide">
                <div class="border" data-position="top"></div>
                <div class="border" data-position="right"></div>
                <div class="border" data-position="left"></div>
                <div class="border" data-position="bottom"></div>

                <div class="splitter">
                    <div class="splitter-item">
                        <div class="vertical-container">
                            <a href="{{ route('book_table') }}" class="vertical-content">
                                <div class="splitter-button about_reservation">
                                    Reservation <br> 
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="splitter-item">
                        <div class="vertical-container">
                            <a href="{{ route('about_us') }}" class="vertical-content">
                                <div class="splitter-button about_about">
                                    About <br>us
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="menu_div"></div>  -->
<!-- <div class="menu_div_img"> -->
    <!-- <iframe src="{{asset('temp1/pdf/menu_shisha_shqip.pdf')}}" style="width:100%;height:550px;" class="menu_img"></iframe> -->
    <!-- <object data="test.pdf" type="application/pdf" width="300" height="200">
        alt : <a href="test.pdf">test.pdf</a>
    </object> -->
    <!-- <img src="{{asset('slide/img/shushaMenu.jpg')}}" class="menu_img img-responsive"> -->
<!-- </div> -->


<!-- <div id="shishaMenu" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
            <p>hello</p>
            <img src="{{asset('slide/img/shushaMenu.jpg')}}" class="img-responsive">
        </div>
    </div>
  </div>
</div> -->
<!-- <div id="shishaMenu" class="modal">
  <p>Thanks for clicking. That felt good.</p>
  <a href="#" rel="modal:close">Close</a>
</div> -->
<script type="text/javascript">
            $( document ).ready(function() {
                // console.log( "ready!" );
                // function centerModal() {
                    // $('.image-link').magnificPopup({type:'image'}); 
                    // $("#shishaMenu").modal({backdrop: false});
                    // $(this).css('display', 'block');
                    // var $dialog = $(this).find(".modal-dialog");
                    // var offset = ($(window).height() - $dialog.height()) / 2;
                    // // Center modal vertically in window
                    // $dialog.css("margin-top", offset);
                    
                // }


                //$('.example_d').on('click', centerModal);
                // $('.modal').on('show.bs.modal', centerModal);
                // $(window).on("resize", function () {
                //     $('.modal:visible').each(centerModal);
                // });
            });
</script>