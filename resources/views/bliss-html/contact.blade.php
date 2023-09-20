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
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <link rel="stylesheet" href="css/style4.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
   </head>
   <!-- body -->
   <body class="main-layout inner_page">
      <!-- loader  -->
      
      <!-- end loader -->
      <div class="full_bg">
         <header>
            <a class="logo" href="index.html"><img src="images/mg1.png" style="width: 100px" alt=""></a>
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
                  <li class="menu-item"><a href="/contact.blade.php">Contact</a></li>
                  @if (Route::has('login'))
        
                              @auth
                              <li class="menu-item"><a href="{{ url('/dashboard') }}" >Dashboard</a></li>
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
      <footer>
         <div class="footer">
            
            <div class="container">
               <div class="content">
                 <div class="left-side">
                   <div class="address details">
                     <i class="fas fa-map-marker-alt"></i>
                     <div class="topic">Adresse</div>
                     <div class="text-one">2ème étage, Résidence Saada, Av. Mohammed V, Rabat</div>
                   </div>
                   <div class="phone details">
                     <i class="fas fa-phone-alt"></i>
                     <div class="topic">Téléphone</div>
                     <div class="text-one">+212699821398</div>
                     <div class="text-two">+212795869865</div>
                   </div>
                   <div class="email details">
                     <i class="fas fa-envelope"></i>
                     <div class="topic">Email</div>
                     <div class="text-one">digitadeco@gmail.com</div>
                     <div class="text-two">digitadecoinfo@gmail.com</div>
                   </div>
                 </div>
                 <div class="right-side">
                   <div class="topic-text">
                       Envoyez-nous un message</div>
                   <p>Si vous avez des questions ou demande, vous pouvez nous envoyer un message à partir d'ici.</p>
                 <form action="#">
                   <div class="input-box">
                     <input type="text" placeholder="Entrer votre nom">
                   </div>
                   <div class="input-box">
                     <input type="text" placeholder="Entrer votre email">
                   </div>
                   <div class="input-box">
                   <input type="text"placeholder="Objet">
               </div>
               <div class="input-box">
                   <textarea id="subject" name="subject" placeholder="Votre message" style="height:200px"></textarea>
               </div>
                   <div class="input-box message-box"> 
                   </div>
                   <div class="button">
                     <input type="submit" value="Envoyer" >
                   </div>
                 </form>
               </div>
               </div>
             </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="follow text_align_center">
                           <h3>Follow Us</h3>
                           <ul class="social_icon">
                              <li><a href="Javascript:void(0)"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="Javascript:void(0)"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="Javascript:void(0)"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                              <li><a href="Javascript:void(0)"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                          </ul>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <p>© 2023 All Rights Reserved. Design by <a href="https://html.design/"> IMAD</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
      </footer>
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