<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link href="{{ asset('assets/css/all.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
    rel="stylesheet">
  <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <title>Les Pages Jaunes </title>
  <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.1.99/css/materialdesignicons.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/css/swiper.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
  @livewireStyles

</head>

<body>
{{ $slot }}

  <footer class="footer bg-style wow fadeInUp">
    <div class="container">
      <div class="footer-upper">
        <div class="row">
          <div class="col-lg-3 col-md-12">
            <div class="footer-widget about-widget"> <a href="#"> <img alt="" src="{{ asset('assets/images/logo.png') }}"> </a>
              <p></p>
              <div class="readmore"><a href="#">Contacter </a></div>
            </div>
          </div>
          <div class="col-lg-2 col-md-3">
            <div class="footer-widget quick-links">
              <h3 class="title">Liens rapides</h3>
              <ul>
                <li><a href="#."> Accueil</a> </li>
                <li><a href="#."> Professionnels</a> </li>
                <li><a href="#."> Entreprises</a> </li>
                <li><a href="#."> Services</a> </li>
                <li><a href="#."> Contact </a> </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-5">
            <div class="footer-widget contact">
              <h3 class="title">Professionnels</h3>
              <ul class="property_sec">
                <li>
                  <div class="rec_proprty">
                    <div class="propertyImg"><img alt="" src="{{ asset('assets/images/property_small01.jpg') }}"></div>
                    <div class="property_info">
                      <h4><a href="#">Agence Accra</a></h4>
                      <p> </p>
                      <div class="priceWrp"> </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="rec_proprty">
                    <div class="propertyImg"><img alt="" src="{{ asset('assets/images/property_small02.jpg') }}"></div>
                    <div class="property_info">
                      <h4><a href="#">Agence Lomé</a></h4>
                      <p> </p>
                      <div class="priceWrp"></div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="footer-widget contact">
              <h3 class="title">Contacts</h3>
              <ul class="footer-adress">
                <li class="footer_address"> <i class="fas fa-map-signs"></i> <span>Afrique , Ghana , Accra</span> </li>
                <li class="footer_email"> <i class="fas fa-envelope" aria-hidden="true"></i> <span><a
                      href="mailto:info@realestate.com"> info@pagesjaunesafrique.com </a></span> </li>
                <li class="footer_phone"> <i class="fas fa-phone-alt"></i> <span><a href="tel:7704282433"> +233
                      0000000000</a></span> </li>
              </ul>
              <div class="social-icons footer_icon">
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <!-- Owl Carousel -->
  <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
  <!-- wow js -->
  <script src="{{ asset('assets/js/animate.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
  <script>
    new WOW().init();
  </script>
  <!-- general script file -->
  <script src="{{ asset('assets/js/wow.js') }}"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
  <script src="{{ asset('assets/script.js') }}"></script>
  @livewireScripts
</body>

<!-- Mirrored from malikhassan.com/html/evernest/index_video.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Apr 2022 17:50:57 GMT -->

</html>