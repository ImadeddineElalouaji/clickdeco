@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
   
  <!--ICI IMAD-->
<head>
    <meta charset="utf-8">
    <title>WEBUILD -  Construction Company Website Template Free</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
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
  
  <!-- Page Header Start -->
    <div class="container-fluid page-header">

        @if (Auth::user()->role == 2)
        <h1 class="display-3 text-uppercase text-white mb-3">Nos Service</h1>
        @elseif (Auth::user()->role == 3)
        <h1 class="display-3 text-uppercase text-white mb-3">Espace Decorateur</h1>
        @elseif (Auth::user()->role == 1)
        <h1 class="display-3 text-uppercase text-white mb-3">Dashboard Admin</h1>
        @endif
    </div>
    <!-- Page Header Start -->


    <!-- Services Start -->
    <div class="container-fluid bg-light py-6 px-5">
      @if (Auth::user()->role == 3)
      <div class="text-center mx-auto mb-5" style="max-width: 600px;"> 
        <h1 class="display-5 text-uppercase mb-4">Nous fournissons <span class="text-primary">le meilleur espace</span> pour les décorateurs</h1>
    </div>
      @elseif (Auth::user()->role == 2)
      <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <h1 class="display-5 text-uppercase mb-4">Nous fournissons <span class="text-primary">les meilleurs services</span> de décoration</h1>
    </div>
      @endif
      {{-- @if (Auth::user()->role == 3)
     
      @elseif (Auth::user()->role == 2)
    
      @endif
        --}}
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                    
                    @if (Auth::user()->role == 3)
                    <img class="img-fluid" src="{{ asset('imgs/service-66.jpg')}}" alt="">
      @elseif (Auth::user()->role == 2)
      <img class="img-fluid" src="{{ asset('imgs/service-6.jpg')}}" alt="">
      @elseif (Auth::user()->role == 1)
      <img class="img-fluid" src="{{ asset('imgs/user-2.jpg')}}" alt="">
      @endif
                    
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-building text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                      @if (Auth::user()->role == 3)
                      <h4 class="text-uppercase mb-3">Créer mon profil</h4>
                      <p>créez votre propre profil affichant vos spécialités de travail, vos travaux antérieurs et surtout vos informations afin que les clients puissent vous trouver !</p>
                      <a class="btn text-primary" href="{{ route('showForm') }}">Click Ici<i class="bi bi-arrow-right"></i></a>
      @elseif (Auth::user()->role == 2)
      <h4 class="text-uppercase mb-3">Trouvez votre décorateur spécifique</h4>
      <p>nous vous permettons de trouver votre décorateur spécifique où vous pouvez effectuer une recherche par adresse et spécialité et voir leur travail</p>
      <a class="btn text-primary" href="{{ route('decorators.list') }}">Click Ici<i class="bi bi-arrow-right"></i></a>
      @elseif (Auth::user()->role == 1)
      <h4 class="text-uppercase mb-3">Les Utilisateur</h4>
      <p>Gestion des Utilisateur</p>
      <a class="btn text-primary" href="{{ route('users.index') }}">Click Ici<i class="bi bi-arrow-right"></i></a>
      @endif
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    
                    @if (Auth::user()->role == 3)
                    <img class="img-fluid" src="{{ asset('imgs/service-22.jpg')}}" alt="">
      @elseif (Auth::user()->role == 2)
      <img class="img-fluid" src="{{ asset('imgs/service-2.jpg')}}" alt="">
      @elseif (Auth::user()->role == 1)
      <img class="img-fluid" src="{{ asset('imgs/image-2.jpeg')}}" alt="">
      @endif
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-home text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                      @if (Auth::user()->role == 3)
                      <h4 class="text-uppercase mb-3">Explore Les Devis Des Clients</h4>
                      <p>nous vous permettons de visualiser différents clients et leurs devis et vous pouvez filtrer et trouver votre client idéal dès aujourd'hui!</p>
                      @elseif (Auth::user()->role == 2)
                      <h4 class="text-uppercase mb-3">Demander votre devis personnalisé</h4>
                      <p>Ici vous pouvez demander votre devis spécifique à votre goût en précisant le budget, le style et le décorateur parfait vous contactera</p>
                      @elseif (Auth::user()->role == 1)
                      <h4 class="text-uppercase mb-3"> devis personnalisé</h4>
                      <p>Les Devis des Client</p>
                      @endif
                      @if (Auth::user()->role == 3)
                          <a class="btn text-primary" href="{{ route('devis.index') }}">CLIQUEZ ICI <i class="bi bi-arrow-right"></i></a>
                      @elseif (Auth::user()->role == 2)
                          <a class="btn text-primary" href="{{ route('devis.create') }}">CLIQUEZ ICI <i class="bi bi-arrow-right"></i></a>
                          @elseif (Auth::user()->role == 1)
                          <a class="btn text-primary" href="{{ route('devis.index') }}">CLIQUEZ ICI <i class="bi bi-arrow-right"></i></a>
                      @endif
                  </div>
                  
                </div>
                {{--@if (Auth::user()->role == 3|| Auth::user()->role == 2)--}}
            </div>
           
            @if (Auth::user()->role == 3 || Auth::user()->role == 2)
            <div class="col-lg-4 col-md-6">
              <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                  <img class="img-fluid" src="{{ asset('imgs/service-3.jpg')}}" alt="">
                  <div class="service-icon bg-white">
                      <i class="fa fa-3x fa-drafting-compass text-primary"></i>
                  </div>
                  <div class="px-4 pb-4">
                      <h4 class="text-uppercase mb-3">Notre Boutique</h4>
                      <p>Vous avez parfois besoin de produits pour décorer votre maison et cela coûte cher ?
                          consultez notre boutique en ligne pour des décorations {{--de bonne qualité avec les meilleures offres--}} en un seul click</p>
                      <a class="btn text-primary" href="http://clickdeco.free.nf">Read More <i class="bi bi-arrow-right"></i></a>
                  </div>
              </div>
          </div>
            @elseif (Auth::user()->role == 1)
            <div class="col-lg-4 col-md-6">
              <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                  <img class="img-fluid" src="{{ asset('imgs/service-3.jpg')}}" alt="">
                  <div class="service-icon bg-white">
                      <i class="fa fa-3x fa-drafting-compass text-primary"></i>
                  </div>
                  <div class="px-4 pb-4">
                      <h4 class="text-uppercase mb-3">DECORATEURS</h4>
                      <p>PROFILE DE DECORATEURS</p>
                      <a class="btn text-primary" href="{{ route('decorators.list') }}">Read More <i class="bi bi-arrow-right"></i></a>
                  </div>
              </div>
          </div>
            @endif
          
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->
  
    
    <style>
       * {
    box-sizing: border-box;
}

.menu1 {
    overflow: hidden;
    cursor: -webkit-grab;
    cursor: grab;
    width: 100%;
    position: relative;
    z-index: 1;
    height: 40vh;
}

.menu1.is-dragging {
    cursor: -webkit-grabbing;
    cursor: grabbing;
}

.menu--wrapper {
    counter-reset: count;
    display: flex;
    position: absolute;
    z-index: 1;
    height: 100%;
    top: 0;
    left: 0;
    width: 100%;
}

.menu--item1 {
    counter-increment: count;
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;
    width: 30vw;
    height: 100%;
    padding: 0 1.5vw;
    overflow: hidden;
}

@media (max-width: 767px) {
    .menu--item1 {
        width: 40vw;
        height: 40vw;
    }
}

.menu--item1:nth-child(n+10):before {
    content: counter(count);
}

.menu--item1 figure {
    position: absolute;
    z-index: 1;
    display: block;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-appearance: none;
    padding: 0;
    border: none;
    outline: none;
    box-shadow: none;
    cursor: pointer;
    width: 100%;
    height: 100%;
    overflow: hidden;
    transform-origin: center;
}

.menu--item1 figure img {
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    vertical-align: middle;
    transform-origin: center;
}

.menu--item1 figure:before {
    position: absolute;
    z-index: 2;
    bottom: 1vw;
    left: 1vw;
    display: inline-block;
    content: "0" counter(count);
    color: #ffffff;
    font-size: 3vw;
}

.version {
    display: inline-block;
    position: fixed;
    text-align: center;
    z-index: 1;
    text-decoration: none;
    background: #333;
    font-family: sans-serif;
    color: #fff;
    text-transform: uppercase;
    font-size: 12px;
    border-radius: 10px;
    box-shadow: 0 8px 10px -5px rgba(0, 0, 0, 0.2);
    top: -30px;
    right: -50px;
    bottom: auto;
    transform: rotate(45deg);
    transform-origin: 0% 100%;
    border-radius: 0;
    padding: 8px 30px;
    font-size: 11px;
}

.version:before {
    content: "";
    position: absolute;
    z-index: -1;
    width: 100%;
    height: 100px;
    bottom: 0;
    right: 0%;
    background: transparent;
}

@media (max-width: 767px) {
    .version {
        transform: scale(0.6) rotate(45deg);
        right: -100px;
    }
}

      </style>
      
          
          
           
          <h1 style="text-align: center">
            travaux réalisés
          </h1>
            <div class="menu1">
            
              @foreach ($decorator_images as $image)
    <div class="menu--item1">
        <figure>
            <a href="{{ route('decorators.show', ['id' => $image->decorator_submission_id]) }}">
                <div class="creation-item1">
                    <img src="{{ asset('storage/' . $image->path) }}" alt="Creation Image">
                </div>
                {{-- <button>Click me</button> --}}
            </a>
        </figure>
    </div>
@endforeach

          

          
            
            </div>
          </div>
        @endsection
       
      
        <!-- partial -->
          <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js'></script><script  src="./script.js"></script>
          
      
      
      @section('styles')
          <!-- Add the local CSS for the Slick slider -->
          <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
          <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
      @endsection
      @section('scripts')
         <script>
          /*--------------------
      Vars
      --------------------*/
      const $menu = document.querySelector('.menu1');
      const $items = document.querySelectorAll('.menu--item1');
      const $images = document.querySelectorAll('.menu--item1 img');
      let menuWidth = $menu.clientWidth;
      let itemWidth = $items[0].clientWidth;
      let wrapWidth = $items.length * itemWidth;
      
      let scrollSpeed = 0;
      let oldScrollY = 0;
      let scrollY = 0;
      let y = 0;
      
      
      /*--------------------
      Lerp
      --------------------*/
      const lerp = (v0, v1, t) => {
        return v0 * (1 - t) + v1 * t;
      };
      
      
      /*--------------------
      Dispose
      --------------------*/
      const dispose = scroll => {
        gsap.set($items, {
          x: i => {
            return i * itemWidth + scroll;
          },
          modifiers: {
            x: (x, target) => {
              const s = gsap.utils.wrap(-itemWidth, wrapWidth - itemWidth, parseInt(x));
              return `${s}px`;
            } } });
      
      
      };
      dispose(0);
      
      
      /*--------------------
      Wheel
      --------------------*/
      const handleMouseWheel = e => {
        scrollY -= e.deltaY * 0.9;
      };
      
      
      /*--------------------
      Touch
      --------------------*/
      let touchStart = 0;
      let touchX = 0;
      let isDragging = false;
      const handleTouchStart = e => {
        touchStart = e.clientX || e.touches[0].clientX;
        isDragging = true;
        $menu.classList.add('is-dragging');
      };
      const handleTouchMove = e => {
        if (!isDragging) return;
        touchX = e.clientX || e.touches[0].clientX;
        scrollY += (touchX - touchStart) * 2.5;
        touchStart = touchX;
      };
      const handleTouchEnd = () => {
        isDragging = false;
        $menu.classList.remove('is-dragging');
      };
      
      
      /*--------------------
      Listeners
      --------------------*/
      $menu.addEventListener('mousewheel', handleMouseWheel);
      
      $menu.addEventListener('touchstart', handleTouchStart);
      $menu.addEventListener('touchmove', handleTouchMove);
      $menu.addEventListener('touchend', handleTouchEnd);
      
      $menu.addEventListener('mousedown', handleTouchStart);
      $menu.addEventListener('mousemove', handleTouchMove);
      $menu.addEventListener('mouseleave', handleTouchEnd);
      $menu.addEventListener('mouseup', handleTouchEnd);
      
      $menu.addEventListener('selectstart', () => {return false;});
      
      
      /*--------------------
      Resize
      --------------------*/
      window.addEventListener('resize', () => {
        menuWidth = $menu.clientWidth;
        itemWidth = $items[0].clientWidth;
        wrapWidth = $items.length * itemWidth;
      });
      
      
      /*--------------------
      Render
      --------------------*/
      const render = () => {
        requestAnimationFrame(render);
        y = lerp(y, scrollY, .1);
        dispose(y);
      
        scrollSpeed = y - oldScrollY;
        oldScrollY = y;
      
        gsap.to($items, {
          skewX: -scrollSpeed * .2,
          rotate: scrollSpeed * .01,
          scale: 1 - Math.min(100, Math.abs(scrollSpeed)) * 0.003 });
      
      };
      render();
         </script>
      
    <!-- Appointment Start -->
    {{-- <div class="container-fluid py-6 px-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h1 class="display-5 text-uppercase mb-4">Donnez-nous <span class="text-primary"> votre avis</span></h1>
                    </div>
                    <p class="mb-5">donnez-nous votre avis et faites-nous part de vos commentaires.</p>
                  
                </div>
                <div class="col-lg-8">
                    <div class="bg-light text-center p-5">
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Votre Nom" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Votre Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                   
                                </div>
                                <div class="col-12 col-sm-6">
                                    
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div> --}}
    <!-- Appointment End -->


    <!-- Testimonial Start -->
    {{-- <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">Ce que <span class="text-primary">Nos  </span> Client dite!!!</h1>
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
                                <h4 class="text-uppercase mb-0">Client Name</h4>
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
                                <h4 class="text-uppercase mb-0">Client Name</h4>
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
    </div> --}}
    <!-- Testimonial End -->
 <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

     
@endsection