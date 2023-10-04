<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>ClickDeco</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/style_contact.css">
      <link rel="stylesheet" href="style_menu.css">
      <link rel="stylesheet" href="css/fontawesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
   </head>
   <body>
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
  <!-- Contact DEBUT -->
  <div class="jumbotron jumbotron-fluid mb-5">
    <div class="container text-center py-5">
        <h1 class="text-white display-3">Contact</h1>
        <div class="d-inline-flex align-items-center text-white">
           
        </div>
    </div>
</div>
      <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <div class="bg-primary text-dark text-center p-4">
                        <h4 class="m-0"><i class="fa fa-map-marker-alt text-white mr-2"></i>Avenue Mouhamed V, Rabat 10000, Maroc</h4>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.8793091011175!2d-6.8379058!3d34.0213088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76c7701d34c2f%3A0x3783a0527930836f!2sIfiag%20Rabat%20-%20Saada!5e0!3m2!1sen!2sma!4v1696155637943!5m2!1sen!2sma" width="100%" height="470" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">Contactez Nous</h6>
                    <h1 class="mb-4">Contact </h1>
                    <div class="contact-form bg-secondary" style="padding: 30px;">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="name" placeholder="Your Name"
                                    required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control border-0 p-4" id="email" placeholder="Your Email"
                                    required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="subject" placeholder="Subject"
                                    required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control border-0 py-3 px-4" rows="3" id="message" placeholder="Message"
                                    required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <!-- Contact End -->
        
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
                       <li><a href="#">Contact</a></li>
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
                       <li><a href="contact.html">Contact</a></li>
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