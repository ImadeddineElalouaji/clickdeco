<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>ClickDeco</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="style_menu.css">
      <link rel="stylesheet" href="style.css.css">
      <link rel="stylesheet" href="css/fontawesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  
      <!-- Libraries Stylesheet -->
      <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
      <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
      <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
      
      
      <!-- Customized Bootstrap Stylesheet -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
  
      <!-- Template Stylesheet -->
      <link href="css/stylee.css" rel="stylesheet">
      <link href="css/bootstrap.min3.css" rel="stylesheet">
   </head>
   <body>
     <!-- Google Web Fonts -->
    
     
    
      <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

section{
  padding: 20px 100px;
}

.section-home{
  position: relative;
  min-height: 100vh;
  background: url(bg.jpg)no-repeat;
  background-size: cover;
  background-position: center;
  display: flex;
  justify-content: center;
  align-items: center;
}

.section-home:before{
  content: '';
  position: absolute;
  background: linear-gradient(to top, #23252B, transparent);
  width: 100%;
  height: 80px;
  bottom: 0;
}

.section-home h1{
  color: #CCA43B;
  font-size: 4vw;
  font-weight: 700;
  text-shadow: 0 5px 25px rgb(0 0 0 / 20%);
  opacity: 10;
}

.section-two{
  min-height: 100vh;
  background: #23252B;
}

.section-two h2{
  color: #fff;
  font-size: 3em;
  font-weight: 700;
  margin: 30px 0;
}

.section-two p{
  color: #fff;
  font-size: 1em;
  margin: 30px 0;
}

header{
  z-index: 999;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: #23252B;
  box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
  padding: 0 100px;
  transition: 0.6s;
}

header .logo{
  color: #fff;
  font-size: 1.8em;
  font-weight: 700;
  text-transform: uppercase;
  text-decoration: none;
  letter-spacing: 2px;
}

header .navigation{
  position: relative;
  line-height: 75px;
  transition: 0.6s;
  transition-property: line-height;
}

header.sticky .navigation{
  line-height: 60px;
}

header .navigation .menu{
  position: relative;
  display: flex;
  justify-content: center;
  list-style: none;
  user-select: none;
}

.menu-item > a{
  color: #fff;
  font-size: 1em;
  text-decoration: none;
  margin: 20px;
  padding: 25px 0;
}

.menu-item > a:hover{
  color: #469DFF;
  transition: 0.3s;
}

.menu-item .sub-menu{
  position: absolute;
  background: #23252B;
  top: 74px;
  line-height: 40px;
  list-style: none;
  border-radius: 0 0 8px 8px;
  box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
  pointer-events: none;
  transform: translateY(20px);
  opacity: 0;
  transition: 0.3s;
  transition-property: transform, opacity;
}

header.sticky .menu-item .sub-menu{
  top: 60px;
}

.menu-item:hover .sub-menu{
  pointer-events: all;
  transform: translateY(0);
  opacity: 1;
}

.menu-item .sub-menu .sub-item{
  position: relative;
  padding: 7px 0;
  cursor: pointer;
  box-shadow: inset 0px -30px 5px -30px rgba(255, 255, 255, 0.2);
}

.menu-item .sub-menu .sub-item a{
  color: #fff;
  font-size: 1em;
  text-decoration: none;
  padding: 15px 30px;
}

.menu-item .sub-menu .sub-item:hover{
  background: #4080EF;
}

.menu-item .sub-menu .sub-item:last-child:hover{
  border-radius: 0 0 8px 8px;
}

.more .more-menu{
  position: absolute;
  background: #23252B;
  list-style: none;
  top: 0;
  left: 100%;
  white-space: nowrap;
  border-radius: 0 8px 8px 8px;
  overflow: hidden;
  pointer-events: none;
  transform: translateY(20px);
  opacity: 0;
  transition: 0.3s;
  transition-property: transform, opacity;
}

.more:hover .more-menu{
  pointer-events: all;
  transform: translateY(0);
  opacity: 1;
}

.more .more-menu .more-item{
  padding: 7px 0;
  box-shadow: inset 0px -30px 5px -30px rgba(255, 255, 255, 0.2);
  transition: 0.3s;
}

.more .more-menu .more-item:hover{
  background: #4080EF;
}

.menu-btn{
  display: none;
}

@media (max-width: 1060px){
  header .navigation .menu{
    position: fixed;
    display: block;
    background: #23252b;
    min-width: 350px;
    height: 100vh;
    top: 0;
    right: -100%;
    padding: 90px 50px;
    visibility: hidden;
    overflow-y: auto;
    transition: 0.5s;
    transition-property: right, visibility;
  }

  header.sticky .navigation{
    line-height: 75px;
  }

  header .navigation .menu.active{
    right: 0;
    visibility: visible;
  }

  .menu-item{
    position: relative;
  }

  .menu-item .sub-menu{
    opacity: 1;
    position: relative;
    top: 0;
    transform: translateX(10px);
    background: rgba(255, 255, 255, 0.1);
    border-radius: 5px;
    overflow: hidden;
    display: none;
  }

  header.sticky .menu-item .sub-menu{
    top: 0;
  }

  .menu-item:hover .sub-menu{
    transform: translateX(10px);
  }

  .menu-item .sub-menu .sub-item{
    box-shadow: none;
  }

  .menu-item .sub-menu .sub-item:hover{
    background: none;
  }

  .menu-item .sub-menu .sub-item a:hover{
    color: #4080EF;
    transition: 0.3s;
  }

  .close-btn{
    position: absolute;
    background: url(close.png)no-repeat;
    width: 40px;
    height: 40px;
    background-size: 25px;
    background-position: center;
    top: 0;
    left: 0;
    margin: 25px;
    cursor: pointer;
  }

  .menu-btn{
    background: url(menu.png)no-repeat;
    width: 40px;
    height: 40px;
    background-size: 30px;
    background-position: center;
    cursor: pointer;
    display: block;
  }

  header{
    padding: 15px 20px;
  }

  header.sticky{
    padding: 10px 20px;
  }
}
    
      </style>
      
      <header>
         <a class="logo" href="index.php">Click<span>Deco</span></a>
         <div class="navigation">
           <ul class="menu">
             <div class="close-btn"></div>
             <li class="menu-item"><a href="index.php">Accueil</a></li>
             
             
               <li class="menu-item"><a href="{{'apropos'}}">A propos</a></li>
               <li class="menu-item"><a href="{{'contact'}}">Contact</a></li>
               <li class="menu-item"><a href="http://clickdeco.free.nf">Boutique</a></li>
               @if (Route::has('login'))
           
               @auth
               <li class="menu-item"><a href="{{('home') }}" >Dashboard</a></li>
               @else
               <li class="menu-item"><a href="#">Compte PRO</a>
                  <ul class="sub-menu">
                     <li class="menu-item"> <a href="{{ route('login') }}">Log in</a></li>
                     @if (Route::has('register'))
                     <li class="menu-item"><a href="{{ route('register') }}" >Register</a></li>
                   </ul>
               </li>
               @endif
               @endauth
           
           @endif
               </ul>
           </div>
         <div class="menu-btn"></div>
       </header>
   
      <div id="home" class="slider">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            {{-- <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>
            </ol> --}}
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="d-block w-100" src="imgs/img.jpg" alt="slider_img">
                  <div class="ovarlay_slide_cont">
                     <h4>HARMONISEZ VOTRE EXPERIENCE</h4>
                     <p>Connectez-vous avec des decorateurs talentueux en un click</p>
                     <a class="blue_bt" href="#">Voir plus</a>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="imgs/maison.jpg" alt="slider_img">
                  <div class="ovarlay_slide_cont">
                     <h4>HARMONISEZ VOTRE EXPERIENCE</h4>
                     <p>Connectez-vous avec des decorateurs talentueux en un click</p>
                     <a class="blue_bt" href="#">Voir plus</a>
                  </div>
               </div>
            </div>
            {{-- <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <img src="imgs/left.png" alt="#" />
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <img src="imgs/right.png" alt="#" />
            </a> --}}
         </div>
      </div>
      <div id="about" class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <h3 style="text-transform: none !important">S'INSPIREZ-VOUS</h3>
                  <img src="imgs/cham2.jpg" alt="#" width="500px"/>
               </div>
               <div class="col-md-6 offset-md-1">
                  <div class="full text_align_center">
                     <img class="img-responsive" src="imgs/about.png" alt="#" />
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="hiw" class="hiw_section layout_padding" style="background: #1a2428;">
         <div class="container">
            <div class="row">
              <a style="text-align: center" href class="bouton">CATEGORIES</a>
               <div class="col-md-7">
                  
                 
               </div>
               <div class="col-md-5">
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <img class="margin_top_30 img-responsive" src="imgs/mai.jpg" alt="#" />
                  <h3 class="blog_head">Appartement et Maison</h3>
               </div>
               <div class="col-md-4">
                  <img class="margin_top_30 img-responsive" src="imgs/restaurant2.jpg" alt="#" />
                  <h3 class="blog_head">Restaurant</h3>
               </div>
               <div class="col-md-4">
                  <img class="margin_top_30 img-responsive" src="imgs/bureauu.jpg" alt="#" />
                  <h3 class="blog_head">Bureau</h3>
               </div>
            </div>
         </div>
      </div>
      <div id="wcs" class="hiw_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text_align_center">
                  
               
            </div>
            <div class="row">
               <div class="col-md-11">
                  <div class="full testimonial_blog">
                     <p>DECOUVREZ LA REALISATION DE NOS DECORATEURS</p>
                     <div class="row">
                        <div class="col-md-8 service_blog">
                           <img class="margin_top_30 img-responsive" src="imgs/mai.jpg" alt="#" />
                           <a class="blue_bt" href="#">Voir plus</a>
                        </div>
                        <div class="col-md-4 service_blog">
                           <img class="margin_top_30 img-responsive" src="imgs/deco2.jpg" alt="#" />
                           <a class="blue_bt" href="#">Voir plus</a>
                        </div>
                                 </div>
                  </div>
               </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   
  <section class="client_section layout_padding">
   <div class="container ">
     <div class="heading_container heading_center">
       <h2>
         {{-- Ce que les clients disent  --}}
         
       </h2>
     </div>
     <div class="container-fluid bg-light py-6 px-5">
      <div class="text-center mx-auto mb-5" style="max-width: 600px;">
          <h1 class="display-5 text-uppercase mb-4">ce que disent <span class="text-primary">nos </span> Client!!!</h1>
      </div>
      <div class="row gx-0 align-items-center">
          <div class="col-xl-4 col-lg-5 d-none d-lg-block">
              <img class="img-fluid w-100 h-100" src="{{ asset('imgs/testimonial.jpg')}}">
          </div>
          <div class="col-xl-8 col-lg-7 col-md-12">
              <div class="testimonial bg-light">
                  <div class="owl-carousel testimonial-carousel">
                      <div class="row gx-4 align-items-center">
                          <div class="col-xl-4 col-lg-5 col-md-5">
                              <img class="img-fluid w-100 h-100 bg-light p-lg-3 mb-4 mb-md-0" src="{{ asset('imgs/testimonial-1.jpg')}}" alt="">
                          </div>
                          <div class="col-xl-8 col-lg-7 col-md-7">
                              <h4 class="text-uppercase mb-0">Imad Eddine Elalouaji</h4>
                              <p>Profession</p>
                              <p class="fs-5 mb-0"><i class="fa fa-2x fa-quote-left text-primary me-2"></i> Dolores sed duo
                                  clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem
                                  lorem magna ut labore et tempor diam tempor erat. Erat dolor rebum sit
                                  ipsum.</p>
                          </div>
                      </div>
                      <div class="row gx-4 align-items-center">
                          <div class="col-xl-4 col-lg-5 col-md-5">
                              <img class="img-fluid w-100 h-100 bg-light p-lg-3 mb-4 mb-md-0" src="{{ asset('imgs/testimonial-2.jpg')}}" alt="">
                          </div>
                          <div class="col-xl-8 col-lg-7 col-md-7">
                              <h4 class="text-uppercase mb-0">Aya aya</h4>
                              <p>Profession</p>
                              <p class="fs-5 mb-0"><i class="fa fa-2x fa-quote-left text-primary me-2"></i> Dolores sed duo
                                  clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem
                                  lorem magna ut labore et tempor diam tempor erat. Erat dolor rebum sit
                                  ipsum.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">
         {{-- <div class="carousel-item active">
           <div class="box">
             <div class="img-box">
               <img src="imgs/client1.jpg" alt="">
             </div>
             <div class="detail-box">
               <h4>
                 Sarah Belkroum
               </h4>
               <p>
              ClickDeco est la plateforme idéale pour trouver un bon décorateur intérieur. 
              Je suis trop satisfaite de leur service grace à eux, 
              j'ai pu trouver un trés bon décorateur pour la décoration intérieur de mon appartement.
              Merci pour votre aide.
               </p>
             </div>
           </div>
         </div> --}}
         {{-- <div class="carousel-item ">
           <div class="box">
             <div class="img-box">
               <img src="imgs/client2.jpg" alt="">
             </div>
             <div class="detail-box">
               <h4>
                 Sophie Ndiaye
               </h4>
               <p>
                  ClickDeco est la plateforme idéale pour trouver un bon décorateur intérieur. 
                  Je suis trop satisfaite de leur service grace à eux, 
                  j'ai pu trouver un trés bon décorateur pour la décoration intérieur de mon appartement.
                  Merci pour votre aide.
               </p>
             </div>
           </div>
         </div> --}}
         {{-- <div class="carousel-item ">
           <div class="box">
             <div class="img-box">
               <img src="imgs/client3.jpg" alt="">
             </div>
             <div class="detail-box">
               <h4>
                 Chaima Youbi
               </h4>
               <p>
                  ClickDeco est la plateforme idéale pour trouver un bon décorateur intérieur. 
                  Je suis trop satisfaite de leur service grace à eux, 
                  j'ai pu trouver un trés bon décorateur pour la décoration intérieur de mon appartement.
                  Merci pour votre aide.
               </p>
             </div>
           </div>
         </div> --}}
       </div>
       <div class="carousel_btn-box">
         <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
           <i class="fa fa-angle-left" aria-hidden="true"></i>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
           <i class="fa fa-angle-right" aria-hidden="true"></i>
           <span class="sr-only">Next</span>
         </a>
       </div>
     </div>
   </div>
 </section>

 <!-- end client section -->
 
      
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-12">
                  <div class="footer_blog_section">
                     <img src="imgs/logo.jpeg" alt="#" width="70px" />
                     <p style="margin-top: 5px;">Nous sommes une plateforme de mise en relation entre les décorateurs intérieurs et les clients</p>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase" style="color: white">Navigation</h4>
                     <ul>
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">A propos</a></li>
                        <li><a href="#">Réalisation</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="contact.html">Contact</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase" style="color: white">Contact</h4>
                     <p style="style="color: white><strong>Adresse:</strong></p>
                     <p><img src="imgs/location.png" alt="#" /> Avenue Mouhamed V, Rabat</p>
                     <p><strong>Téléphone:</strong></p>
                     <p><img src="imgs/phone_icon.png" alt="#" />0675357438</p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase" style="color: white">Autres</h4>
                     <ul>
                        <li><a href="#">Compte</a></li>
                        <li><a href="#">Abonnement</a></li>
                        <li><a href="#">Subscribe</a></li>
                        <li><a href="#">Contact</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright text-center">

         </div>
      </footer>
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script>
         $(function () {
             
             'use strict';
             
             var winH = $(window).height();
             
             $('header').height(winH);  
             
             $('header .container > div').css('top', (winH / 2) - ( $('header .container > div').height() / 2));
             
             $('.navbar ul li a.search').on('click', function (e) {
                 e.preventDefault();
             });
             $('.navbar a.search').on('click', function () {
                 $('.navbar form').fadeToggle();
             });
             
             $('.navbar ul.navbar-nav li a').on('click', function (e) {
                 
                 var getAttr = $(this).attr('href');
                 
                 e.preventDefault();
                 $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
             });
         })
      </script>
       <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
       <script src="lib/easing/easing.min.js"></script>
       <script src="lib/waypoints/waypoints.min.js"></script>
       <script src="lib/owlcarousel/owl.carousel.min.js"></script>
       <script src="lib/tempusdominus/js/moment.min.js"></script>
       <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
       <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
       <script src="lib/isotope/isotope.pkgd.min.js"></script>
       <script src="lib/lightbox/js/lightbox.min.js"></script>
       <script src="js/main.js"></script>
   </body>
</html>