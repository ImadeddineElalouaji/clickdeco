@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="style_portfolio.css">
<div class="decorators-list">
    

    <!-- Filter Form -->
    <div class="filter">
        <form action="{{ route('decorators.list') }}" method="GET">
            {{-- <label for="adresse">Filtrer par Adresse:</label> --}}
            <span class="custom-dropdown big">
            <select name="adresse" id="adresse">
                <option value="">Tous les adresses</option>
                @foreach ($adresses as $adresse)
                    <option value="{{ $adresse }}" @if ($selectedAdresse == $adresse) selected @endif>{{ $adresse }}</option>
                @endforeach
            </select>
            <label for="specialite">Filtrer par Spécialité:</label>
    <select name="specialite" id="specialite">
        <option value="">Toutes les spécialités</option>
        @foreach ($specialites as $specialite)
            <option value="{{ $specialite }}" @if ($selectedSpecialite == $specialite) selected @endif>{{ $specialite }}</option>
        @endforeach
    </select>
          </span>
          <script>
            /* JS for demo only */
var colors = ['1abc9c', '2c3e50', '2980b9', '7f8c8d', 'f1c40f', 'd35400', '27ae60'];

colors.each(function (color) {
  $$('.color-picker')[0].insert(
    '<div class="square" style="background: #' + color + '"></div>'
  );
});

$$('.color-picker')[0].on('click', '.square', function(event, square) {
  background = square.getStyle('background');
  $$('.custom-dropdown select').each(function (dropdown) {
    dropdown.setStyle({'background' : background});
  });
});

/*
 * Original version at
 * http://red-team-design.com/making-html-dropdowns-not-suck
 */ 
          </script>
          <style>
            
.big {
  font-size: 1.2em;
}

.small {
  font-size: .7em;
}

.square {
  width: .7em;
  height: .7em;
  margin: .5em;
  display: inline-block;
}

/* Custom dropdown */
.custom-dropdown {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  margin: 10px; /* demo only */
}

.custom-dropdown select {
  background-color: #23252B;
  color: #fff;
  font-size: inherit;
  padding: .5em;
  padding-right: 2.5em;	
  border: 0;
  margin: 0;
  border-radius: 3px;
  text-indent: 0.01px;
  text-overflow: '';
  -webkit-appearance: button; /* hide default arrow in chrome OSX */
}

.custom-dropdown::before,
.custom-dropdown::after {
  content: "";
  position: absolute;
  pointer-events: none;
}

.custom-dropdown::after { /*  Custom dropdown arrow */
  content: "\25BC";
  height: 1em;
  font-size: .625em;
  line-height: 1;
  right: 1.2em;
  top: 50%;
  margin-top: -.5em;
}

.custom-dropdown::before { /*  Custom dropdown arrow cover */
  width: 2em;
  right: 0;
  top: 0;
  bottom: 0;
  border-radius: 0 3px 3px 0;
}

.custom-dropdown select[disabled] {
  color: rgba(0,0,0,.3);
}

.custom-dropdown select[disabled]::after {
  color: rgba(0,0,0,.1);
}

.custom-dropdown::before {
  background-color: rgba(0,0,0,.15);
}

.custom-dropdown::after {
  color: rgba(0,0,0,.4);
}
          </style>
            <button type="submit" >Filtrer</button>
            <style>
              @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

button{
  padding: 25px 30px;
  background-color: #000000;
  color: #ffffff;
  font-weight: bold;
  border: none;
  border-radius: 35px;
  letter-spacing: 4px;
  overflow: hidden;
  transition: 0.5s;
  cursor: pointer;
}

button:hover{
    background: #ececec;
    color: #050801;
    box-shadow: 0 0 5px #f84f00,
                0 0 25px #f84f00,
                0 0 50px #f84f00,
                0 0 200px #f84f00;
     -webkit-box-reflect:below 1px linear-gradient(transparent, #0005);
}
            </style>
        </form>
    </div>
    

    {{-- <div id="filtered-decorators">
        <div class="decorators">
            @foreach ($decorators as $decorator)
            <div class="decorator">
                <img src="{{ asset('storage/' . $decorator->avatar) }}" alt="{{ $decorator->nom }} {{ $decorator->prenom }}">
                <h2><span>Prenom:</span>{{ $decorator->prenom }}</h2>
                <h2><span>specialite:</span>{{ $decorator->specialite }}</h2>

                <p><span>Ville:</span>{{ $decorator->adresse }}</p>
                
                <a href="{{ route('decorators.show', ['id' => $decorator->id]) }}">Lire Plus</a>
            </div>
            @endforeach
        </div>
        {{-- <div id="slider-navigation">
            <button id="slider-prev-btn">&larr;</button>
            <button id="slider-next-btn">&rarr;</button>
          </div> --}}
    </div> 
    <div>
        
        <section>
          <div class="swiper mySwiper container">
              <div class="swiper-wrapper content">
                  @foreach ($decorators as $decorator)
                  <div class="swiper-slide card">
                      <div class="card-content">
                          <div class="image">
                              <img src="{{ asset('storage/' . $decorator->avatar) }}" alt="{{ $decorator->nom }} {{ $decorator->prenom }}" alt="">
                          </div>
                          <div class="media-icons">
                              <i class="fab fa-facebook"></i>
                              <i class="fab fa-twitter"></i>
                              <i class="fab fa-github"></i>
                          </div>
                          <div class="name-profession">
                              <span class="name">{{ $decorator->prenom }}</span>
                              <span class="profession">{{ $decorator->specialite }}</span>
                              <span class="profession">{{ $decorator->adresse }}</span>
                          </div>
                          <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                          </div>
                          <div class="button">
                              <button class="aboutMe"><a href="{{ route('decorators.show', ['id' => $decorator->id]) }}">Lire Plus</a></button>
                          </div>
                      </div>
                  </div>
                  @endforeach
              </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
      </section>
        
        
      </div>
       
      <style>
        

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

 /* body{
   height: 100vh; 
  
   
   background: #f2f2f2; 
}  */

/* section{
  position: relative;  
  display: flex;
  align-items: center;
} */

/* .swiper{
  width: 100%;
}

.card{
  position: relative;
  background: #e9e9e9;
  border-radius: 20px;
  
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
} */

.card::before{
  content: "";
  position: absolute;
  height: 40%;
  width: 100%;
  background: #000000;
  border-radius: 20px 20px 0 0;
}

.card .card-content{
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 30px;
  position: relative;
  z-index: 100;
}

section .card .image{
  height: 140px;
  width: 140px;
  border-radius: 50%;
  padding: 3px;
  background: #271e1e;
}

section .card .image img{
  height: 100%;
  width: 100%;
  object-fit: cover;
  border-radius: 50%;
  border: 3px solid #000000;
}

.card .media-icons{
  position: absolute;
  top: 10px;
  right: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.card .media-icons i{
  color: #fff;
  opacity: 0.6;
  margin-top: 10px;
  transition: all 0.3s ease;
  cursor: pointer;
}

.card .media-icons i:hover{
  opacity: 1;
}

.card .name-profession{
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 10px;
  color: ;
} 

.name-profession .name{
  font-size: 20px;
  font-weight: 600;
}

.name-profession .profession{
  font-size:15px;
  font-weight: 500;
}

.card .rating{
  display: flex;
  align-items: center;
  margin-top: 18px;
}

.card .rating i{
  font-size: 18px;
  margin: 0 2px;
  color: #f84f00;
}

.card .button{
  width: 100%;
  display: flex;
  justify-content: space-around;
  margin-top: 20px;
}

.card .button button{
  background: #000000;
  outline: none;
  border: none;
  color: #fff;
  padding: 8px 22px;
  border-radius: 20px;
  font-size: 14px;
  transition: all 0.3s ease;
  cursor: pointer;
}

.button button:hover{
  background: #f84f00;
}

.swiper-pagination{
  position: absolute;
}

.swiper-pagination-bullet{
  height: 7px;
  width: 26px;
  border-radius: 25px;
  background: #000000;
}

.swiper-button-next, .swiper-button-prev{
  opacity: 0.7;
  color: #000000;
  transition: all 0.3s ease;
}
.swiper-button-next:hover, .swiper-button-prev:hover{
  opacity: 1;
  color: #000000;
}
.credit a{
  text-decoration: none;
  color: #000000;
  font-weight: 800;
}
.credit {
  text-align: center;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
}


      </style>
      
      {{----}}
    <style>
        h1 {
            text-align: center;
        }
    
        .decorators {
            display: flex;
            flex-wrap: wrap;
            /* Adjust this to your preference */
            margin: 0 -10px; /* Add some negative margin to adjust the spacing */
        }
    
        .decorator {
            width: 200px;
            text-align: center;
            margin: 5px; /* Add some margin to create space between decorators */
            padding: 5px; /* Add padding to create a box around each decorator */
            border: 4px solid #838383; /* Add a border around each decorator */
            border-radius: 29px; /* Add rounded corners to the border */
            background-color: #f9f9f9; /* Add a background color to the decorator box */
        }
    
        .decorator img {
            width: 50%;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 10px;
        }
    
        .decorator h2 {
            font-size: 20px;
            margin-bottom: 5px;
        }
    
        .decorator p {
            font-size: 18px;
            margin-bottom: 10px;
        }
    
        .decorator a {
            display: inline-block;
            padding: 5px 10px;
            margin-bottom: 5px;
            background-color: #CCA43B;
            text-decoration: none;
            color: #fff;
        }
    
        .decorator a:hover {
            background-color: #aaa;
        }
        #slider-container {
      overflow: hidden;
       }

      .decorators-slider {
      display: flex;
      transition: transform 0.3s ease;
       }

       #slider-navigation {
       display: flex;
       justify-content: space-between;
        margin-top: 10px;
     }

      #slider-navigation button {
      padding: 1px 5px;
      background-color: #CCA43B;
      color: #fff;
      border: none;
      cursor: pointer;
     }

       #slider-navigation button:hover {
        background-color: #aaa;
     }
      #slider-container {
      overflow: hidden;
      }

      .decorators-slider {
          display: flex;
          transition: transform 0.3s ease;
          }

          #slider-navigation { 
           display: flex;
          justify-content: space-between;
           margin-top: 10px;
          }

           #slider-navigation button {
          padding: 5px 10px;
         background-color: #CCA43B;
         color: #fff;
        border: none;
         cursor: pointer;
           }

       #slider-navigation button:hover {
        background-color: #aaa;
        }

    </style>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const slider = document.querySelector('.decorators-slider');
      const prevBtn = document.getElementById('slider-prev-btn');
      const nextBtn = document.getElementById('slider-next-btn');
  
      const decoratorWidth = document.querySelector('.decorator').offsetWidth;
      const decoratorsCount = document.querySelectorAll('.decorator').length;
      const decoratorsPerSlide = 5;
      const totalSlides = Math.ceil(decoratorsCount / decoratorsPerSlide);
      let currentSlide = 0;
  
      prevBtn.addEventListener('click', () => {
        currentSlide = Math.max(currentSlide - 1, 0);
        updateSliderPosition();
      });
  
      nextBtn.addEventListener('click', () => {
        currentSlide = Math.min(currentSlide + 1, totalSlides - 1);
        updateSliderPosition();
      });
  
      function updateSliderPosition() {
        slider.style.transform = `translateX(-${currentSlide * decoratorWidth * decoratorsPerSlide}px)`;
      }
    });
  </script>
    

@endsection
