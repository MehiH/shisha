

<!DOCTYPE html>
 <html class="no-js" lang="en"> 
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0,user-scalable=no">

         <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Shisharoom - Lounge, Hookah, Bar</title>
        <meta name="description" content="Shisha Room, shisharoom,Shisha Room offers the highest quality of shisha’s. That’s the essence of what we do – but it hardly tells the whole story.,shisha,room,Lounge,Hookah, Bar, Restorant">
        <meta property="og:site_name" content="shisharoom">
        <meta property="og:url" content="http://blog/">
        <meta property="og:image" content="{{ asset('temp1/images/logo.png')}}">
        <meta property="og:locale" content="en_EN">
        <meta property="og:description" content="Shisha room">
        <meta property="og:title" content="Shisharoom - Lounge, Hookah, Bar">
        <meta property="og:type" content="website">
        <!-- <meta name="robots" content="noindex,nofollow"> -->

        <link rel="shortcut icon" href="logo.png" />

        <link rel="stylesheet" href="{{ asset('vendor/videojs/dist/video-js/video-js.min.css')}}">
        <link rel="stylesheet" href="{{ asset('vendor/swiper/dist/css/swiper.min.css')}}">
        <link rel="stylesheet" href="{{ asset('vendor/outdated-browser/outdatedbrowser/outdatedbrowser.min.css')}}">
        <link rel="stylesheet" href="{{ asset('js/plugins/jquery.nlform/css/jquery.nlform.css')}}">

        <script src="{{ asset('vendor/modernizr/modernizr.js')}}"></script>
        <script src="{{ asset('vendor/devicejs/lib/device.min.js')}}"></script>
        <script src="{{ asset('vendor/Detect.js/detect.min.js')}}"></script>

        <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Emilys+Candy|Great+Vibes|Lobster|Merienda&display=swap" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>

        <link href="https://fonts.googleapis.com/css?family=Antic+Didone|Arsenal|Cinzel|Cinzel+Decorative|David+Libre|Julius+Sans+One|Megrim|Play|Sirin+Stencil&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Poiret+One|Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

        <!-- Magnific Popup core JS file -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script> -->
        <link rel="stylesheet" href="{{ asset('css/style.min.css')}}">
        <link href="{{ asset('about/lib/lightbox/css/lightbox.min.cs')}}s" rel="stylesheet">
    
    </head>

    <body>

        <div id="outdated" style="z-index:9999999999"></div>

        <a href="{{ route('book_table') }}"><div class="button_cont " align="center" id="awwwards"></div></a>

        <header>
            <a href="#/" class="get_logo logo"></a>

            <div class="navigation">
                <div class="group active" data-page-id="homepage-page">
                    <ul>
                        <li>
                            <a href="#homepage-introduction" class="active">
                                Home
                                <div class="progress-border">
                                    <div class="progress-line"></div>
                                </div>
                            </a>
                        </li>
                        <li><a href="#homepage-event">Venue</a></li>
                        <li>
                            <a href="#homepage-menu">
                                Menu
                                <div class="progress-border">
                                    <div class="progress-line"></div>
                                </div>
                            </a>
                        </li>
                        <li><a href="#homepage-about-us">About Us</a></li>
                    </ul>
                </div>
            </div>

            
        </header>

        <div class="loader"></div>

        <div class="main-container"></div>

        <!-- <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> -->
        <script src="{{ asset('js/vendors.min.js')}}"></script>
        <script src="{{ asset('js/plugins.min.js')}}"></script>
        <script src="{{ asset('js/controllers.min.js')}}"></script>
        <script src="{{ asset('js/app.min.js')}}"></script>
        <script src="{{ asset('about/lib/lightbox/js/lightbox.min.js')}}"></script>

    </body>

</html>
