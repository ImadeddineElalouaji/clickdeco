<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Projet</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style111.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
      <link rel="stylesheet" href="css/stylefooter.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <link rel="stylesheet" href="css/style4.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
   </head>
   <!-- body -->
   <body class="main-layout">
      
      <!-- loader  -->
      <section class="section-home">
         <h1>HARMONISER votre Experience</h1>
       </section>
       <section class="section-two">
       </section>
      <!-- end loader -->
      <div class="full_bg">
         <header>
            <a class="logo" href="#"><span>ClickDeco</span></a>
            <div class="navigation">
              <ul class="menu">
                <div class="close-btn"></div>
                <li class="menu-item"><a href="index.php">Accueil</a></li>
                <li class="menu-item">
                  <a class="sub-btn" href="#">Réalisation <i class="fas fa-angle-down"></i></a>
                  <ul class="sub-menu">
                    <li class="sub-item"><a href="#">Galleries</a></li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a class="sub-btn" href="#">Services<i class="fas fa-angle-down"></i></a>
                  <ul class="sub-menu">
                    <li class="sub-item"><a href="#">Catégories</a></li>
                    <li class="sub-item"><a href="#">Demander un devis</a></li>
                  </ul>
                  
                  </li>
                  <li class="menu-item"><a href="#">A propos</a></li>
                  <li class="menu-item"><a href="http://clickdeco.free.nf">Boutique</a></li>
                  <li class="menu-item"><a href="/contact.blade.php">Contact</a></li>
                  @if (Route::has('login'))
        
                              @auth
                              <li class="menu-item"><a href="{{ url('/home') }}" >Dashboard</a></li>
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
      
        
          <script>
            //toggle more-menus
       $(".more-btn").click(function(){
          $(this).next(".more-menu").slideToggle();
        });
      
      //javascript for the responsive navigation menu
      var menu = document.querySelector(".menu");
      var menuBtn = document.querySelector(".menu-btn");
      var closeBtn = document.querySelector(".close-btn");
      
      menuBtn.addEventListener("click", () => {
        menu.classList.add("active");
      });
      
      closeBtn.addEventListener("click", () => {
        menu.classList.remove("active");
      });
      
      //javascript for the navigation bar effects on scroll
      window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
      });
          </script>
         <!-- header -->
        
         <!-- end header inner -->
         <!-- top -->
         <div class="slider_main">
            <!-- carousel code -->
            <div id="banner1" class="carousel slide">
               <ol class="carousel-indicators">
                  <li data-target="#banner1" data-slide-to="0" class="active"></li>
                  <li data-target="#banner1" data-slide-to="1"></li>
                  <li data-target="#banner1" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <!-- first slide -->
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="carousel-caption relative">
                           <div class="row d_flex">
                              <div class="col-md-5">
                                 <div class="creative">
                                    <h1>Click <br> Deco </h1>
                                    <p>commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint</p>
                                    <a class="read_more" href="Javascript:void(0)">Contact us</a>
                                    
                                 </div>
                              </div>
                              <div class="col-md-7">
                                 <div class="row mar_right">
                                    <div class="col-md-6">
                                       <div class="agency">
                                          <figure><img src="images/img1.png" alt="#"/></figure>
                                          
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="agency">
                                          <figure><img src="images/img2.png" alt="#"/></figure>
                                         
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- second slide -->
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption relative">
                           <div class="row d_flex">
                              <div class="col-md-5">
                                 <div class="creative">
                                    <h1>Spa <br>Center </h1>
                                    <p>commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint</p>
                                    <a class="read_more" href="Javascript:void(0)">Contact us</a>
                                    <a class="read_more" href="Javascript:void(0)">Read More</a>
                                 </div>
                              </div>
                              <div class="col-md-7">
                                 <div class="row mar_right">
                                    <div class="col-md-6">
                                      
                                    </div>
                                    <div class="col-md-6">
                                       
                                       
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- third slide-->
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption relative">
                           <div class="row d_flex">
                              <div class="col-md-5">
                                 <div class="creative">
                                    <h1>Spa <br>Center </h1>
                                    <p>commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint</p>
                                    <a class="read_more" href="Javascript:void(0)">Contact us</a>
                                    <a class="read_more" href="Javascript:void(0)">Read More</a>
                                 </div>
                              </div>
                              <div class="col-md-7">
                                 <div class="row mar_right">
                                    <div class="col-md-6">
                                       <div class="agency">
                                          <figure><img src="images/img1.png" alt="#"/></figure>
                                          <div class="play_icon">
                                             <a class="play-btn" href="javascript:void(0)"><img src="images/play_icon.png"></a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="agency">
                                          <figure><img src="images/img2.png" alt="#"/></figure>
                                          <div class="play_icon">
                                             <a class="play-btn" href="javascript:void(0)"><img src="images/play_icon.png"></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- controls -->
               <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
               <i class="fa fa-angle-left" aria-hidden="true"></i>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
               <i class="fa fa-angle-right" aria-hidden="true"></i>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </div>
      <!-- end banner -->
      <!-- appointment -->
      
      <!-- end appointment -->
      <!-- services -->
      <div class="services">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>Les Articles Les plus vendu!</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div id="ho_shad" class="services_box text_align_left">
                     <h3>chaise lounge</h3>
                     <figure><img src="images/service1.jpg" alt="#"/></figure>
                     <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                     <a class="read_more" href="service.html">Read More</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="ho_shad" class="services_box text_align_left">
                     <h3>canapé</h3>
                     <figure><img src="images/service2.jpg" alt="#"/></figure>
                     <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                     <a class="read_more" href="service.html">Read More</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="ho_shad" class="services_box text_align_left">
                     <h3>Bureau enfant</h3>
                     <figure><img src="images/service3.jpg" alt="#"/></figure>
                     <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                     <a class="read_more" href="service.html">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end services -->
      <!-- priceing -->
      <div class="priceing">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>Our Priceing </h2>
                     <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="our_priceing text_align_center">
                           <div class="our_pri">
                              <h3>Regular Price</h3>
                              <span>DH<strong>50</strong></span>
                              <p>sed do eiusmod <br>tempor incididunt ut <br>labore et dolore<br> magna aliqua. Utenim <br> ad minim aliquip</p>
                           </div>
                           <a class="read_more" href="javascript:void(0)">Read More</a>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="our_priceing text_align_center">
                           <div class="our_pri">
                              <h3>Special Price</h3>
                              <span>DH<strong>100</strong></span>
                              <p>sed do eiusmod <br>tempor incididunt ut <br>labore et dolore<br> magna aliqua. Utenim <br> ad minim aliquip</p>
                           </div>
                           <a class="read_more" href="javascript:void(0)">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="our_priceing text_align_center">
                           <div class="our_pri">
                              <h3>Regular Price</h3>
                              <span>DH<strong>100</strong></span>
                              <p>sed do eiusmod <br>tempor incididunt ut <br>labore et dolore<br> magna aliqua. Utenim <br> ad minim aliquip</p>
                           </div>
                           <a class="read_more" href="javascript:void(0)">Read More</a>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="our_priceing text_align_center">
                           <div class="our_pri">
                              <h3>Special Price</h3>
                              <span>DH<strong>75</strong></span>
                              <p>sed do eiusmod <br>tempor incididunt ut <br>labore et dolore<br> magna aliqua. Utenim <br> ad minim aliquip</p>
                           </div>
                           <a class="read_more" href="javascript:void(0)">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end priceing -->
      <!-- blog -->
      <div class="blog">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>Latest Blog</h2>
                     <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class=" col-md-4">
                  <div class="latest">
                     <figure><img src="images/blog1.jpg" alt="#"/></figure>
                     <span>16 March</span>
                     <div class="nostrud">
                        <h3>Quis Nostrud </h3>
                        <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                        <a class="read_more" href="blog.html">Read More</a>
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="latest">
                     <figure><img src="images/blog2.jpg" alt="#"/></figure>
                     <span class="yellow">17 March</span>
                     <div class="nostrud">
                        <h3>Veniam, Quis </h3>
                        <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                        <a class="read_more" href="blog.html">Read More</a>
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="latest">
                     <figure><img src="images/blog3.jpg" alt="#"/></figure>
                     <span>18 March</span>
                     <div class="nostrud">
                        <h3>Tempor incididunt </h3>
                        <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                        <a class="read_more" href="blog.html">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end blog -->
      <!-- about -->
      <div class="about">
         <div class="container_width">
            <div class="row d_flex grig">
               <div class="col-md-6">
                  <div class="about_img">
                     <figure><img src="images/about_img.jpg" alt="#"/>
                     </figure>
                  </div>
               </div>
               <div class="col-md-6 order">
                  <div class="titlepage text_align_left">
                     <h2>Nos Services</h2>
                     <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipsed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                     <a class="read_more" href="about.html">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- customers -->
      <div class="customers">
         <div class="clients_bg">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="titlepage text_align_center">
                        <h2>What is Says Customers</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- start slider section -->
         <div id="myCarousel" class="carousel slide clients_banner" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <div class="row d_flex">
                           <div class="col-md-2 col-sm-8">
                              <div class="pro_file">
                                 <i><img src="images/test2.png" alt="#"/></i>
                                 <h4>English.Many</h4>
                                 <span>normal distribution</span>
                              </div>
                           </div>
                           <div class="col-md-10">
                              <div class="test_box text_align_left">
                                 <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <div class="row d_flex">
                           <div class="col-md-2 col-sm-8">
                              <div class="pro_file">
                                 <i><img src="images/test2.png" alt="#"/></i>
                                 <h4>English.Many</h4>
                                 <span>normal distribution</span>
                              </div>
                           </div>
                           <div class="col-md-10">
                              <div class="test_box text_align_left">
                                 <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <div class="row d_flex">
                           <div class="col-md-2 col-sm-8">
                              <div class="pro_file">
                                 <i><img src="images/test2.png" alt="#"/></i>
                                 <h4>English.Many</h4>
                                 <span>normal distribution</span>
                              </div>
                           </div>
                           <div class="col-md-10">
                              <div class="test_box text_align_left">
                                 <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
      <!-- end customers -->
      <!--  footer -->
      <footer class="footer">
         <div class="container1">
            <div class="row1">
               <div class="footer-col1">
                  <h4>Click Deco</h4>
                  <ul>
                     <li><a href="#">A propos</a></li>
                     <li><a href="#">Nos services</a></li>
                     <li><a href="#">Compte</a></li>
                     <li><a href="#">Abonnement</a></li>
                  </ul>
               </div>
               <div class="footer-col1">
                  <h4>Menu</h4>
                  <ul>
                     <li><a href="#">Réalisation</a></li>
                     <li><a href="#">A propos</a></li>
                     <li><a href="#">Boutique</a></li>
                     <li><a href="#">Contact</a></li>
                     <li><a href="#">Gallerie</a></li>
                  </ul>
               </div>
               <div class="footer-col1">
                  <h4>Coordonnées</h4>
                  <p>Adresse : Avenue Mouhamed V, Rabat</p>
                  <p>Téléphone : +212 699 82 13 98</p>
                  <p>Email : clickdeco@gmail.com</p>
               </div>
               <div class="footer-col1">
                  <h4>Suivez Nous</h4>
                  <div class="social-links">
                     <a href="#"><i class="fab fa-facebook-f"></i></a>
                     <a href="#"><i class="fab fa-twitter"></i></a>
                     <a href="#"><i class="fab fa-instagram"></i></a>
                     <a href="#"><i class="fab fa-linkedin-in"></i></a>
                  </div>
               </div>
            </div>
         </div>
     </footer>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
 
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/bootstrap-datepicker.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>