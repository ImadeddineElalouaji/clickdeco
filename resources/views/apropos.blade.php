<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>clickDeco</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="style_menu.css">
      <link rel="stylesheet" href="css/fontawesome.min.css">
      <link rel="stylesheet" href="css/style_contact.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
   </head>
   <body>
    {{--hahowa--}}
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
<!-- Header End -->


      <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="imgs/font.jpg" alt="">
                    <div class="bg-primary text-dark text-center p-4">
                        <h3 class="m-0">Première plateforme</h3>
                    </div>
                </div>
                <div class="col-lg-7">Nous sommes une plateforme de mise en relation entre les décorateurs intérieurs et les clients. Notre mission est de vous assiter et vous faciter sur votre recherche de décorateur adéquate à votre besoinDolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                    <div class="d-flex align-items-center pt-2">
                       
            
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid w-100" src="imgs/bureauu.jpg" alt="">
                </div>
                <div class="col-lg-7 py-5 py-lg-0">
                    <h3 class="text-primary text-uppercase font-weight-bold">Pourquoi nous Choisir</h3>
                    <h1 class="mb-4">ClickDeco</h1>
                    <p class="mb-4">Nous sommes une plateforme de mise en relation entre les décorateurs intérieurs et les clients. Notre mission est de vous assiter et vous faciter sur votre recherche de décorateur adéquate à votre besoin</p>
                    <ul class="list-inline">
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Plateforme de relation</h6>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Nos Services</h6></li>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>24/7 Disponible</h6></li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h3 class="text-primary text-uppercase font-weight-bold">Notre Equipe</h3>
                <h1 class="mb-4">Rencontrez notre équipe</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="imgs/imad.jpeg" alt="" >
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Imad</h5>
                                <span>Elaouaji</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="imgs/hafsa.png" alt="" >
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Hafsa</h5>
                                <span>El Aoula</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="imgs/seydina.jpeg" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Seydina Issa</h5>
                                <span>Taye</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="imgs/adama.jpeg" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Adama</h5>
                                <span>Seck</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

   
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
                    <h4 class="text-uppercase">Navigation</h4>
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
                    <h4 class="text-uppercase">Contact</h4>
                    <p><strong>Adresse:</strong></p>
                    <p><img src="imgs/location.png" alt="#" /> Avenue Mouhamed V, Rabat</p>
                    <p><strong>Téléphone:</strong></p>
                    <p><img src="imgs/phone_icon.png" alt="#" /> 06 99 82 13 98</p>
                 </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12">
                 <div class="item">
                    <h4 class="text-uppercase">Autres</h4>
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
  </body>
</html>