
  <div class="topbar-wrap" style="background-color:#142c57">
    <div class="container">
      <div class="row" style="background-color:#142c57">
        <div class="col-lg-6 col-md-4">
          <ul class="social_media style_none">
            <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-6 col-md-8">
          <div class="top_right">
            <div class="topbar_phone"><a href="#"><i class="fas fa-phone-alt" aria-hidden="true"></i> (+228) 000 0000 00
              </a></div>
            <div class="topbar_login" style="background-color:orange">
              @if (Route::has('login'))
              @auth
                @if (Auth::user()->type === 'ADMIN')
                    
                @else
                  <div class="dropdown">
                    <button class="dropbtn">Mon Compte({{ Auth::user()->nom }}) </button>
                    <div class="dropdown-content">
                      <a href="#">Profile</a>
                      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Déconnexion</a> 
                      <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf                        
                      </form>
                    </div>
                  </div>
                @endif
                
              @else
              <div class="dropdown">
                <button class="dropbtn">Compte</button>
                <div class="dropdown-content">
                  <a href="{{ route('login') }}">Connexion</a>
                  <a href="{{ route('register') }}">Inscription </a>          
                </div>
              </div>
              @endauth
              
            @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <!--Topbar End-->

  <!--Header Start-->
  <div class="header-wrap wow fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 navbar navbar-expand-lg navbar-light">
          <div class="header_logo"><a href="#"><img alt="" src="{{ asset('assets/images/logo.png') }}"></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
              class="navbar-toggler-icon"></span> </button>
        </div>
        <div class="col-lg-9">
          <nav class="navbar navbar-expand-lg navbar-light"> <a class="navbar-brand" href="#">Menu</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <button class="close-toggler" type="button" data-toggle="offcanvas"> <span><i class="fas fa-times-circle"
                    aria-hidden="true"></i></span> </button>
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="index-2.html"
                    style="background-color:#ffb900 ; color:black"> Entreprises <span class="caret"><i
                        class="fas fa-caret-down"></i></span></a> <i class="fas fa-caret-down"></i>
                  <ul class="submenu">
                    <li><a href="#">SA</a></li>
                    <li><a href="#">SARL</a></li>
                    <li><a href="#">SASU</a></li>
                    <li><a href="#">SAS</a></li>
                    <li><a href="#">SARL U</a></li>
                    <li><a href="#">Etablissement</a></li>
                  </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="#.">Freelance <span class="caret"><i
                        class="fas fa-caret-down"></i></span></a> <i class="fas fa-caret-down"></i>
                  <ul class="submenu">
                    <li><a href="#">Contractuels</a></li>
                    <li><a href="#">Indépendants</a></li>

                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#."> Opportunités <span class="caret"><i
                        class="fas fa-caret-down"></i></span></a> <i class="fas fa-caret-down"></i>
                  <ul class="submenu">
                    <li><a href="#">Offres</a></li>
                    <li><a href="#">Evenements</a></li>

                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#"> Services<span class="caret"><i
                        class="fas fa-caret-down"></i></span></a> <i class="fas fa-caret-down"></i>
                  <ul class="submenu">
                    <li><a href="#">Comptabilité</a></li>
                    <li><a href="#"> Audit</a></li>
                    <li><a href="#">Sites webs</a></li>
                    <li><a href="#">Call center</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#"> Contacts</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
 
  <div class="video">
    <div class="slider-wrap videoWrp" id="home">
      <div class="hero-image" style="background-image: url({{ asset('assets/images/banner2.jpg') }})">
        <video autoplay muted="" poster="#" id="bgvid" loop>
          <source src="{{ asset('assets/videos/construction-background.mp4') }}" type="video/mp4">
        </video>
      </div>
      <div class="videohover hero-wrapper">
        <div class="container">
          <div class="sliderTxt video_hoverText">
            <h1 style="font-family:Myriad pro; font-size:22pt">Le premier Annuaire couvrant les 17 pays de l'OHADA </h1>
            <p>Trouvez les meilleurs services & produits aux meilleurs prix en contactant directement les entreprises!
            </p>
            <div id="exTab1" class="container">
              <ul class="nav nav-pills">
                <li> <a href="#1a" class="active" data-toggle="tab">Annuaire</a> </li>
                <li><a href="#2a" data-toggle="tab" style="background-color:#142c57">Annuaire inversé</a> </li>
              </ul>
              <div class="tab-content clearfix">
                <div class="tab-pane active" id="1a">
                  <div class="form-wrap">
                    <form>
                      <div class="row">
                        <div class="col-lg-5">
                          <div class="input-group origin">
                            <input type="text" name=" Origin"
                              placeholder="Rechercher une entreprise, un professionnel ..." class="form-control">
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="input-group destination">
                            <input type="text" name=" Destination" placeholder="Pays" class="form-control">
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="input-group">
                            <div class="nice-select form-control wide select_option" tabindex="0"><span
                                class="current">Commune</span>
                              <ul class="list">
                                <li data-value="Property Type" data-display="Property Type"
                                  class="option selected focus">Property Type</li>
                                <li data-value="Residential" class="option">Residential</li>
                                <li data-value="Commercial" class="option">Commercial</li>
                                <li data-value="Land" class="option">Land</li>
                                <li data-value="Luxury" class="option">Luxury</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 end_date">
                          <div class="input-group">
                            <div class="nice-select form-control wide select_option" tabindex="0"><span
                                class="current">Ville</span>
                              <ul class="list">
                                <li data-value="Bedrooms" data-display="Bedrooms" class="option selected focus">Bedrooms
                                </li>
                                <li data-value="1" class="option">1</li>
                                <li data-value="2" class="option">2</li>
                                <li data-value="3" class="option">3</li>
                                <li data-value="4" class="option">4</li>
                                <li data-value="5" class="option">5</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 economy">
                          <div class="input-group">
                            <div class="nice-select form-control wide select_option" tabindex="0"><span
                                class="current">Quartier</span>
                              <ul class="list">
                                <li data-value="Bathrooms" data-display="Bathrooms" class="option selected">Bathrooms
                                </li>
                                <li data-value="1" class="option">1</li>
                                <li data-value="2" class="option">2</li>
                                <li data-value="3" class="option">3</li>
                                <li data-value="4" class="option">4</li>
                                <li data-value="5" class="option">5</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="input-group">
                            <div class="nice-select form-control wide select_option" tabindex="0"><span
                                class="current">Services , Produits</span>
                              <ul class="list">
                                <li data-value="Property Type" data-display="Property Type"
                                  class="option selected focus">Property Price</li>
                                <li data-value="Residential" class="option">$999 - $1999</li>
                                <li data-value="Commercial" class="option">$1999 - $2999</li>
                                <li data-value="Land" class="option">$2999 - $3999</li>
                                <li data-value="Luxury" class="option">$3999 - $4999</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-2">
                          <div class="input-btn">
                            <button class="sbutn"><i class="fa fa-search" aria-hidden="true"></i> Trouver </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="tab-pane" id="2a">
                  <div class="form-wrap">
                    <form>
                      <div class="row">
                        <div class="col-lg-5">
                          <div class="input-group origin">
                            <input type="text" name=" Origin" placeholder="Entrez le Numero recherché"
                              class="form-control">
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="input-group destination">
                            <input type="text" name=" Destination" placeholder="Pays" class="form-control">
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="input-group">
                            <div class="nice-select form-control wide select_option" tabindex="0"><span
                                class="current">Commune</span>
                              <ul class="list">
                                <li data-value="Property Type" data-display="Property Type"
                                  class="option selected focus">Property Type</li>
                                <li data-value="Residential" class="option">Residential</li>
                                <li data-value="Commercial" class="option">Commercial</li>
                                <li data-value="Land" class="option">Land</li>
                                <li data-value="Luxury" class="option">Luxury</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 end_date">
                          <div class="input-group">
                            <div class="nice-select form-control wide select_option" tabindex="0"><span
                                class="current">Ville</span>
                              <ul class="list">
                                <li data-value="Bedrooms" data-display="Bedrooms" class="option selected focus">Bedrooms
                                </li>
                                <li data-value="1" class="option">1</li>
                                <li data-value="2" class="option">2</li>
                                <li data-value="3" class="option">3</li>
                                <li data-value="4" class="option">4</li>
                                <li data-value="5" class="option">5</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 economy">
                          <div class="input-group">
                            <div class="nice-select form-control wide select_option" tabindex="0"><span
                                class="current">Quartier</span>
                              <ul class="list">
                                <li data-value="Bathrooms" data-display="Bathrooms" class="option selected">Bathrooms
                                </li>
                                <li data-value="1" class="option">1</li>
                                <li data-value="2" class="option">2</li>
                                <li data-value="3" class="option">3</li>
                                <li data-value="4" class="option">4</li>
                                <li data-value="5" class="option">5</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="input-group">
                            <div class="nice-select form-control wide select_option" tabindex="0"><span
                                class="current">Produits , services</span>
                              <ul class="list">
                                <li data-value="Property Type" data-display="Property Type"
                                  class="option selected focus">Property Price</li>
                                <li data-value="Residential" class="option">$999 - $1999</li>
                                <li data-value="Commercial" class="option">$1999 - $2999</li>
                                <li data-value="Land" class="option">$2999 - $3999</li>
                                <li data-value="Luxury" class="option">$3999 - $4999</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-2">
                          <div class="input-btn">
                            <button class="sbutn"><i class="fa fa-search" aria-hidden="true"></i> Trouver </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="property-wrap property_rent wow fadeInUp">
    <div class="container">
      <div class="title">
        <h1 style="color:#003366">SECTEURS D'ACTIVITES</h1>
      </div>
      <br />
      <div id="menu-cust" style="width:90%;overflow-y: scroll; height:200px;">
        <a href="#" style="background-color:#ffb900; font-weight:bold" class="blood">Agroalimentaire</a>
        <a href="#" class="tensimeter">Banque / Assurance</a>
        <a href="#" class="scale">Papier / Carton / Imprimerie</a>
        <a href="#" class="thermometer">BTP / Matériaux de construction</a>
        <a href="#" class="mdevice">Chimie / Parachimie</a>
        <a href="#" class="ear"> Édition / Communication / Multimédia</a>
        <a href="#" class="bmassage">Études et conseils</a>
        <a href="#" class="weelchair"> Machines et équipements / Automobile</a>
        <a href="#" class="asupport">Textile / Habillement / Chaussure</a>
        <a href="#" class="woman">Commerce / Négoce / Distribution</a>
        <a href="#" class="baby">Électronique / Électricité</a>
        <a href="#" class="tooth"> Industrie pharmaceutique</a>
        <a href="#" class="humidifier">Informatique / Télécoms</a>
        <a href="#" class="emergencykit"> Métallurgie / Travail du métal</a>
        <a href="#" class="bmassage">Services aux entreprises</a>
        <a href="#" class="bmassage"> Transports / Logistique</a>
        <a href="#" class="baby">Optique & Ophtamologie</a>
        <a href="#" class="tooth"> Cliniques et Médecine</a>
        <a href="#" class="humidifier">Informatique / Télécoms</a>
        <a href="#" class="emergencykit"> Métallurgie / Travail du métal</a>

      </div>
    </div>
  </div>

  <div class=" property_rent wow fadeInUp">
    <div class="container">
      <div class="title">
        <h1 style="color:#003366">ILS NOUS ONT REJOINT</h1>
      </div>
      <br />

      <!--Carousel Gallery-->
      <div class="carousel-gallery">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a href="#" data-fancybox="gallery">
                <div class="image"
                  style="background-image: url({{ asset('assets/images/sanlam.jpg') }}); border: solid 2px; border-color:blue; border-radius:3px">
                  <div class="overlay">
                    <em class="mdi mdi-magnify-plus"></em>
                  </div>
                </div>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" data-fancybox="gallery">
                <div class="image"
                  style="background-image: url({{ asset('assets/images/sunu.jpg') }}); border: solid 2px; border-color:blue; border-radius:3px">
                  <div class="overlay">
                    <em class="mdi mdi-magnify-plus"></em>
                  </div>
                </div>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" data-fancybox="gallery">
                <div class="image"
                  style="background-image: url({{ asset('assets/images/kop.jpg') }}); border: solid 2px; border-color:blue; border-radius:3px">
                  <div class="overlay">
                    <em class="mdi mdi-magnify-plus"></em>
                  </div>
                </div>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" data-fancybox="gallery">
                <div class="image"
                  style="background-image: url({{ asset('assets/images/boad.jpg') }}); border: solid 2px; border-color:blue; border-radius:3px">
                  <div class="overlay">
                    <em class="mdi mdi-magnify-plus"></em>
                  </div>
                </div>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" data-fancybox="gallery">
                <div class="image"
                  style="background-image: url({{ asset('assets/images/lonato.jpg') }}); border: solid 2px; border-color:blue; border-radius:3px">
                  <div class="overlay">
                    <em class="mdi mdi-magnify-plus"></em>
                  </div>
                </div>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="#" data-fancybox="gallery">
                <div class="image"
                  style="background-image: url({{ asset('assets/images/safer.jpg') }}) ; border: solid 2px; border-color:blue; border-radius:3px">
                  <div class="overlay">
                    <em class="mdi mdi-magnify-plus"></em>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/js/swiper.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js'></script>
  <script src="./script.js"></script>

  <div class="title">
    <h1 style="color:#003366">SPOT & NEWS</h1>
  </div>

  <section class="popular_wrap wow fadeInUp">
    <div class="container">

      <div class="row">
        <div class="col-md-6">
          <div class="popular_img position-relative">
            <video autoplay muted="" class="popular_img position-relative" poster="#" id="bgvid" loop>
              <source src="{{ asset('assets/videos/spotmoov.mp4') }}" type="video/mp4">
            </video>
            <div class="popular_img_text"><a href="#">Tout découvrir</a></div>
          </div>
        </div>
        <div class="col-md-6 mt_md">
          <div class="popular_img position-relative">
            <video autoplay muted="" "	poster=" #" id="bgvid" loop>
              <source src="{{ asset('assets/videos/spotmoov.mp4') }}" type="video/mp4">
            </video>

            <div class="popular_img_text"><a href="#">Voir</a></div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <div class="title">
    <br />
    <h3 style="color:#003366">LE REPORTAGE DE LA SEMAINE </h3>
  </div>

  <div class="buy-wrap wow fadeInUp">
    <iframe width="90%" height="300px" src="https://www.youtube.com/embed/zAKQQpbsK1w" title="YouTube video player"
      frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen></iframe>

  </div>

  <div class="property-wrap wow fadeInUp">
    <div class="container">

      <div class="title">
        <br />
        <h3 style="color:#003366">LES ENTREPRISES A L'HONNEUR CE MOIS </h3>
      </div>
      <!--Row Start-->
      <ul class="row">
        <!--col-lg-4 Start-->
        <li class="col-lg-4">
          <div class="property_box wow fadeInUp">
            <div class="propertyImg"><img alt="" src="{{ asset('assets/images/sanlam.jpg') }}"></div>
            <h3><a href="#">Bienvenue cher client</a></h3>
            <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> </div>
            <div class="heart_info">
              
              <div class="property_price">300 Vues </div>
            </div>
            <div class="propert_info">
              <ul class="row">
                <li class="col-4">

                  <h5>34 agences</h5>
                </li>
                <li class="col-4">

                  <h5>1 agence principale</h5>
                </li>
                <li class="col-4">

                  <h5>320 Services</h5>
                </li>
              </ul>
            </div>
            <div class="rent_info">
              <div class="apart">Découvrir</div>
              <div class="sale" style="background-color:#003366">Contacter</div>
            </div>
          </div>
        </li>
        <!--col-lg-4 End-->

        <!--col-lg-4 Start-->
        <li class="col-lg-4">
          <div class="property_box wow fadeInUp">
            <div class="propertyImg"><img alt="" src="{{ asset('assets/images/boad.jpg') }}"></div>
            <h3><a href="#">Bienvenue cher client</a></h3>
            <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> </div>
            <div class="heart_info">
              
              <div class="property_price">320 Vues </div>
            </div>
            <div class="propert_info">
              <ul class="row">
                <li class="col-4">

                  <h5>34 agences</h5>
                </li>
                <li class="col-4">

                  <h5>1 agence principale</h5>
                </li>
                <li class="col-4">

                  <h5>32 Services</h5>
                </li>
              </ul>
            </div>
            <div class="rent_info">
              <div class="apart">Découvrir</div>
              <div class="sale" style="background-color:#003366">Contacter</div>
            </div>
          </div>
        </li>
        <!--col-lg-4 End-->


        <!--col-lg-4 Start-->
        <li class="col-lg-4">
          <div class="property_box wow fadeInUp">
            <div class="propertyImg"><img alt="" src="{{ asset('assets/images/sunu.jpg') }}"></div>
            <h3><a href="#">Bienvenue cher client</a></h3>
            <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> </div>
            <div class="heart_info">
              
              <div class="property_price">320 Vues </div>
            </div>
            <div class="propert_info">
              <ul class="row">
                <li class="col-4">

                  <h5>34 agences</h5>
                </li>
                <li class="col-4">

                  <h5>1 agence principale</h5>
                </li>
                <li class="col-4">

                  <h5>320 Services</h5>
                </li>
              </ul>
            </div>
            <div class="rent_info">
              <div class="apart">Découvrir</div>
              <div class="sale" style="background-color:#003366">Contacter</div>
            </div>
          </div>
        </li>
        <!--col-lg-4 End-->

      </ul>
      <!--Row End-->

    </div>
  </div>
  
  <div class="buy-wrap wow fadeInUp">
    <div class="container">
      <div class="title">
        <h3 style="color:white">Le point sur les opportunités économiques en un clic</h1>
      </div>
      <p style="color:white">Tous les appels d'offres , les sorties, forum et opportunités d'affaires bénéfiques aux
        opérateurs économiques en 5 minutes!</p>
      <div class="start_btn"> <span><a href="#">Télécharger</a></span> <span><a href="#">Visionner</a></span> </div>
    </div>
  </div>
  
  <section class="popular_wrap wow fadeInUp">
    <div class="container">
      <h1>Les évènements à ne pas rater</h1>
      <span></span>
      <div class="row">
        <div class="col-md-8">
          <div class="popular_img position-relative"> <img alt="" src="{{ asset('assets/images/moov.jpg') }}">
            <div class="popular_img_text"><a href="#">Téléphonie</a></div>
          </div>
        </div>
        <div class="col-md-4 mt_md">
          <div class="popular_img position-relative"> <img alt="" src="{{ asset('assets/images/commerce.jpg') }}">
            <div class="popular_img_text"><a href="#">Commerce</a></div>
          </div>
          <div class="popular_img position-relative mt"> <img alt="" src="{{ asset('assets/images/education.jpg') }}">
            <div class="popular_img_text"><a href="#">Education</a></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="popular_img position-relative mt"> <img alt="" src="{{ asset('assets/images/medecine.jpg') }}">
            <div class="popular_img_text"><a href="#">Médecine</a></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="popular_img position-relative mt"> <img alt="" src="{{ asset('assets/images/alimentation.jpg') }}">
            <div class="popular_img_text"><a href="#">Alimentation</a></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="popular_img position-relative mt"> <img alt="" src="{{ asset('assets/images/commerce.jpg') }}">
            <div class="popular_img_text"><a href="#">Divers</a></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="containere" style="position:relative; top:-50px">
    <div class="title">
      <h3 style="color:white">TOUR DE GARDE</h1>
    </div>

    <div class="carousele">
      <div class="carousel__face"><span>This is something</span></div>
      <div class="carousel__face"><span>Very special</span></div>
      <div class="carousel__face"><span>Special is the key</span></div>
      <div class="carousel__face"><span>For you</span></div>
      <div class="carousel__face"><span>Just give it</span></div>
      <div class="carousel__face"><span>A try</span></div>
      <div class="carousel__face"><span>And see</span></div>
      <div class="carousel__face"><span>How IT Works</span></div>
      <div class="carousel__face"><span>Woow</span></div>
    </div>
  </div>
  <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
  
  <div class="property-wrap property_rent wow fadeInUp">
    <div class="container">
      <div class="title">
        <h1>ELUES <span>Meilleurs services clients</span></h1>
      </div>

      <!--Row Start-->
      <ul class="row">
        <!--col-lg-4 Start-->
        <li class="col-lg-4">
          <div class="property_box wow fadeInUp">
            <div class="propertyImg"><img alt="" src="{{ asset('assets/images/boad.jpg') }}"></div>
            <h3><a href="#">Bienvenue cher client</a></h3>
            <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> </div>
            <div class="heart_info">
              <div class="heart_icon"><a href="#"><i class="fas fa-heart" aria-hidden="true"></i></a></div>
              <div class="heart_icon exchange_icon"><a href="#"><i class="fas fa-exchange-alt"></i></a></div>
              <div class="property_price">500 vues</div>
            </div>
            <div class="propert_info">
              <ul class="row">
                <li class="col-4">

                  <h5>34 agences</h5>
                </li>
                <li class="col-4">

                  <h5>1 agence principale</h5>
                </li>
                <li class="col-4">

                  <h5>320 Services</h5>
                </li>
              </ul>
            </div>
            <div class="rent_info">
              <div class="apart">Découvrir</div>
              <div class="sale" style="background-color:#003366">Contacter</div>
            </div>
          </div>
        </li>
        <!--col-lg-4 End-->

        <!--col-lg-4 Start-->
        <li class="col-lg-4">
          <div class="property_box wow fadeInUp">
            <div class="propertyImg"><img alt="" src="{{ asset('assets/images/sanlam.jpg') }}"></div>
            <h3><a href="#">Bienvenue cher client</a></h3>
            <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> </div>
            <div class="heart_info">
              
              <div class="property_price">320 Vues </div>
            </div>
            <div class="propert_info">
              <ul class="row">
                <li class="col-4">

                  <h5>34 agences</h5>
                </li>
                <li class="col-4">

                  <h5>1 agence principale</h5>
                </li>
                <li class="col-4">

                  <h5>320 Services</h5>
                </li>
              </ul>
            </div>
            <div class="rent_info">
              <div class="apart">Découvrir</div>
              <div class="sale" style="background-color:#003366">Contacter</div>
            </div>
          </div>
        </li>
        <!--col-lg-4 End-->

        <!--col-lg-4 Start-->
        <li class="col-lg-4">
          <div class="property_box  wow fadeInUp">
            <div class="propertyImg"><img alt="" src="{{ asset('assets/images/safer.jpg') }}"></div>
            <h3><a href="#">Bienvenue cher client</a></h3>
            <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> </div>
            <div class="heart_info">
              <div class="heart_icon"><a href="#"><i class="fas fa-heart" aria-hidden="true"></i></a></div>
              <div class="heart_icon exchange_icon"><a href="#"><i class="fas fa-exchange-alt"></i></a></div>
              <div class="property_price">476 VUES</div>
            </div>
            <div class="propert_info">
              <ul class="row">
                <li class="col-4">

                  <h5>34 agences</h5>
                </li>
                <li class="col-4">

                  <h5>1 agence principale</h5>
                </li>
                <li class="col-4">

                  <h5>320 Services</h5>
                </li>
              </ul>
            </div>
            <div class="rent_info">
              <div class="apart">Découvrir</div>
              <div class="sale" style="background-color:#003366">Contacter</div>
            </div>
          </div>
        </li>
        <!--col-lg-4 End-->
      </ul>
      <!--Row End-->

    </div>
  </div>
  
  <section class="perfect_home_wrap wow fadeInUp">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <div class="perfect_text">
            <h1>Les meilleurs hôtels du pays </h1>
            <span></span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="readmore"><a href="#">Visiter</a></div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="our_team_wrap wow fadeInUp">
    <div class="container">
      <h1>Magazines</h1>
      <span></span>
      <div class="row">
        <div class="col-lg-4">
          <div class="team_wrp">
            <div class="team_member  wow fadeInUp">
              <div class="team_img"><img alt="" src="{{ asset('assets/images/mag1.jpg') }}"></div>
              <div class="team_icons">
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                </ul>
              </div>
              <div class="team_name">
                <h3>Découvrir</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="team_wrp">
            <div class="team_member wow fadeInUp">
              <div class="team_img"><img alt="" src="{{ asset('assets/images/mag2.jpg') }}"></div>
              <div class="team_icons">
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                </ul>
              </div>
              <div class="team_name">
                <h3>Découvrir</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="team_wrp">
            <div class="team_member wow fadeInUp">
              <div class="team_img"><img alt="" src="{{ asset('assets/images/mag3.jpg') }}"></div>
              <div class="team_icons">
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                </ul>
              </div>
              <div class="team_name">
                <h3>Découvrir</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  