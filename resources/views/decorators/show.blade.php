@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">


<div class="decorator-details">
    @if ($decorator)
        

        <main id="main" class="main">
          <section class="section profile">
            <div class="row">
              <div class="col-xl-4">
      
                <div class="card">
                  <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    
                    <img style="border-radius: 50px;width: 160px" src="{{ asset('storage/' . $decorator->avatar) }}" alt="{{ $decorator->nom }} {{ $decorator->prenom }}">
                    <h2>Nom: {{ $decorator->nom }}</h2>
                    <h2>Prenom: {{ $decorator->prenom }}</h2>
                    <h3>Spécialité: {{ ucfirst($decorator->specialite) }}</h3>
                    <p>Téléphone: {{ $decorator->telephone ?? 'N/A' }}</p>
                    <p>Adresse: {{ $decorator->adresse ?? 'N/A' }}</p>
                    <p class="small fst-italic">{{ $decorator->description ?? 'N/A' }}</p>
                    
                        @if (auth()->check() && $decorator->user->id !== auth()->user()->id)
                        <a href="{{ route('messages.create', ['receiver_id' => $decorator->user_id]) }}">Message</a>
                    @endif
                    
                    
                  </div>
                </div>
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                      
                      <!-- Add a new comment form -->
    <h2>Ajouter un commentaire</h2>
    <form action="{{ route('decorators.comment', ['id' => $decorator->id]) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nom complet:</label>
            <input type="text" name="name" required>
        </div>
    
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" required value="{{ Auth::user()->email }}" readonly>
            @error('email')
                <div class="alert alert-danger">
                    {{'email already commented with'}}
                </div>
            @enderror
        </div>
    
        <div class="form-group">
            <label for="comment">Commentaire:</label>
            <textarea name="comment" rows="4" required></textarea>
        </div>
    
        <div class="form-group">
            <label for="rating">Évaluation:</label>
            <select name="rating" required>
                <option value="1">1 etoile</option>
                <option value="2">2 etoile</option>
                <option value="3">3 etoile</option>
                <option value="4">4 etoile</option>
                <option value="5">5 etoile</option>
            </select>
        </div>
    
        <button type="submit">Soumettre le commentaire</button>
        
    </form>
                      
                      
                    </div>
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                      
                        {{--IMAFD--}}
                         
                         
                       </div>
                  </div>
      
              </div>
              
              
      
              <div class="col-xl-8">
      
                <div class="card">
                  <div class="card-body pt-3">
                   <h1>Mes projets</h1>
                      <div class="gallery">
                        @foreach ($decorator->images as $image)
                        <a href="{{ asset('storage/' . $image->path) }}" data-lightbox="gallery" >
                            <img src="{{ asset('storage/' . $image->path) }}" alt="Creation Image">
                        </a>
                    @endforeach
                      </div>
      
                      </div>
              </div>
              <div class="card">
                <div class="card-body pt-3">
                    <!-- Commenting Section -->
    {{-- <h2>Commentaires</h2> --}}
    {{-- <div class="comments comments-slider">
        <!-- Display existing comments here if available -->
        <!-- Sample comment: -->
        @if($comments->count() > 0)
            @foreach($comments as $comment)
                <div class="comment">
                    <p><strong>Nom:</strong> {{ $comment->name }}</p>
                    <p><strong>Email:</strong> {{ $comment->email }}</p>
                    <p>*{{ $comment->comment }}</p>
                    <div class="rating">
                        <!-- Display star rating here -->
                        @for($i = 1; $i <= 5; $i++)
                            @if($i <= $comment->rating)
                                <span class="star">&#9733;</span>
                            @else
                                <span class="star">&#9734;</span>
                            @endif
                        @endfor
                    </div>
                </div>
            @endforeach
        @else
            <p>No comments yet.</p>
        @endif
    </div> --}}
    {{-- <div class="wrapper">


        <div class="slider">
      
          <!-- Works with as many slides as are added in-->
          
          
          <label for="slide_text" class="slide-label">Slide Text</label>
          @foreach($comments as $comment)
          <div class="slide-content padded">
            
            <input type="radio" name="slide-switches" id="slide_text" checked class="slide-switch">
            <div class="slide-content padded">
                
                <input type="radio" name="slide-switches" id="slide_image" class="slide-switch">
     <label for="slide_image" class="slide-label">Slide Image</label>
    
     <div class="slide-content">
        <p><strong>Nom:</strong> {{ $comment->name }}</p>
        <p><strong>Email:</strong> {{ $comment->email }}</p>
        <p>*{{ $comment->comment }}</p>
        <div class="rating">
            <!-- Display star rating here -->
            @for($i = 1; $i <= 5; $i++)
                @if($i <= $comment->rating)
                    <span class="star">&#9733;</span>
                @else
                    <span class="star">&#9734;</span>
                @endif
            @endfor
        </div>
    @endforeach
           </div> --}}
           <div class="wrapper">

            <div class="slider">
          
              <!-- Works with as many slides as are added in-->
          
              <input type="radio" name="slide-switches" id="slide_text" checked class="slide-switch">
              
              <div class="slide-content padded">
                {{--comments--}}
                @if($comments->count() > 0)
                @foreach($comments as $comment)
                    <div class="comment">
                        <p><strong>Nom:</strong> {{ $comment->name }}</p>
                        <p><strong>Email:</strong> {{ $comment->email }}</p>
                        <p>*{{ $comment->comment }}</p>
                        <div class="rating">
                            <!-- Display star rating here -->
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= $comment->rating)
                                    <span class="star">&#9733;</span>
                                @else
                                    <span class="star">&#9734;</span>
                                @endif
                            @endfor
                        </div>
                    </div>
                @endforeach
            @else
                <p>No comments yet.</p>
            @endif
            @if($comments->count() > 0)
            <?php
            $totalStars = 0;
            foreach($comments as $comment) {
                $totalStars += $comment->rating;
            }
            $averageRating = round($totalStars / $comments->count(), 1);
            ?>
            <p>Évaluation moyenne: {{ $averageRating }} étoiles</p>
        @else
            <p>Évaluation moyenne: Aucune évaluation pour l'instant.</p>
        @endif
              
          
            </div>
          
            
          </div>

            </div>
          
      
         
        </div>
      </div>
<style>
        * {
      box-sizing: border-box;
     }

     img {
     max-width: 100%;
     height: auto;
     }    

 .slider {
  background: #fff;
  position: relative;
  margin: 2rem 0;
  overflow: hidden;
  padding-bottom: 2.5rem;
  border: 0.25rem solid #95a5a6;
 }
 .slider::after {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;
  content: '';
  display: block;
  background: #34495e;
  height: 3rem;
 }
 .slide-switch {
 display: none;
 }
 .slide-label {
  position: absolute;
  bottom: 1rem;
  display: block;
  z-index: 5;
  height: 1rem;
  width: 1rem;
  text-indent: 1rem;
  overflow: hidden;
  background: #2980b9;
  border-radius: 50%;
  cursor: pointer;
  transition: all 0.25s;
 }
 .slide-label:nth-of-type(1) {
  left: 1rem;
 }
 .slide-label:nth-of-type(2) {
  left: 2.5rem;
 }
 .slide-label:nth-of-type(3) {
  left: 4rem;
 }
 .slide-label:nth-of-type(4) {
  left: 5.5rem;
 }
 .slide-label:nth-of-type(5) {
  left: 7rem;
 }

 .slide-content {
  width: 100%;
  background: #fff;
  float: left;
  margin-right: -100%;
 }
 .slide-switch:checked + .slide-label {
  background: #3498db;
 }
 .slide-switch:not(:checked) + .slide-label + .slide-content {
  opacity: 0;
  transition: opacity 0.35s;
  pointer-events: none;
 }
 .slide-switch:checked + .slide-label + .slide-content {
  animation: slide 1s;
 }
 @keyframes slide {
  0% {
    transform: translateX(100%);
  }
  100% {
     transform: translateX(0);
     }
     }
  </style>

   
                    </div>
    
                    </div>
            </div>
      
                  </div>
                       </div>
      
              </div>
            </div>
            
          
     

   
          
          </div>
          </section>
      
        </main><!-- End #main -->
        <style>
            /* Improved style for the decorator details page */
            .decorator-details {
                max-width: 1200px;
                margin: 0 auto;
                padding: 20px;
            }
        
            .profile-card {
                text-align: center;
                padding: 20px;
            }
        
            .profile-card img {
                border-radius: 50px;
                width: 160px;
                height: 160px;
                object-fit: cover;
                margin: 0 auto 20px;
            }
        
            .profile-card h2 {
                font-size: 24px;
                margin: 10px 0;
            }
        
            .profile-card h3 {
                font-size: 18px;
                margin: 10px 0;
            }
        
            .profile-card p {
                font-size: 16px;
                margin: 5px 0;
            }
        
            .profile-card .small {
                font-size: 14px;
                font-style: italic;
            }
        
            .message-button {
                display: inline-block;
                padding: 10px 20px;
                background-color: #CCA43B;
                color: #fff;
                text-decoration: none;
                font-weight: bold;
                margin-top: 10px;
                border-radius: 5px;
            }
        
            .message-button:hover {
                background-color: #aaa;
            }
        
            .gallery {
                display: flex;
                flex-wrap: wrap;
                margin-top: 20px;
            }
        
            .gallery a {
                flex: 0 0 calc(33.3333% - 20px);
                margin: 10px;
                position: relative;
                overflow: hidden;
            }
        
            .gallery img {
                max-width: 100%;
                height: auto;
                transition: transform 0.2s ease-in-out;
            }
        
            .gallery a:hover img {
                transform: scale(1.1);
            }
        
            /* Styling for the comment section */
            .comments-slider {
                margin-top: 20px;
            }
        
            .comment {
                border: 1px solid #ccc;
                padding: 10px;
                margin-bottom: 20px;
            }
        
            .rating {
                color: orange;
            }
        
            .slick-prev:before,
            .slick-next:before {
                color: #000;
                font-size: 20px;
            }
        
            .slick-prev,
            .slick-next {
                background-color: #CCA43B;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                line-height: 40px;
                text-align: center;
            }
        
            .slick-prev:hover,
            .slick-next:hover {
                background-color: #aaa;
            }
        </style>
      
       
        
        <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/chart.js/chart.umd.js"></script>
        <script src="assets/vendor/echarts/echarts.min.js"></script>
        <script src="assets/vendor/quill/quill.min.js"></script>
        <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="assets/vendor/tinymce/tinymce.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
      
        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
      
      
    @else
        <p>Decorator not found.</p>
    @endif

    {{-- <h2>Travail Réalisé</h2>
    <div class="creation-gallery comments-slider">
        @foreach ($decorator->images as $image)
            <a href="{{ asset('storage/' . $image->path) }}" data-lightbox="gallery" class="clickable-image">
                <img src="{{ asset('storage/' . $image->path) }}" alt="Creation Image">
            </a>
        @endforeach
    </div> --}}

    
<!-- decorators/show.blade.php -->



<style>
    /* Add some basic styling for the decorator details page */
    .decorator-details {
        max-width: 100000px;
        margin: 0 auto;
        padding: -1000px;
    }

    .decorator-info {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .avatar img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
    }

    .personal-info {
        margin-left: 10px;
    }

    .creation-gallery {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
    }

    .creation-gallery img {
        max-width: 100%;
        height: auto;
        cursor: pointer;
        transition: transform 0.2s ease-in-out;
    }

    .creation-gallery img:hover {
        transform: scale(1.1);
    }

    /* Styling for the comment section */
    .comments-slider {
        width: 80%;
        margin: 0 auto;
        position: relative;
    }

    .comments-slider .slick-list,
    .comments-slider .slick-track {
        display: block;
    }

    .comment {
        display: flex;
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 10px;
    }

    .rating {
        color: orange;
    }

    /* Slick carousel styling */
    .slick-prev:before,
    .slick-next:before {
        color: black;
    }

    .slick-prev,
    .slick-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 1;
    }

    .slick-prev {
        left: 10px;
    }

    .slick-next {
        right: 10px;
    }
</style>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<!-- Add this JavaScript code inside the <script> tag -->
<script>
    // JavaScript to handle image click to enlarge/restore
    const clickableImages = document.querySelectorAll('.clickable-image');

    clickableImages.forEach((image) => {
        image.addEventListener('click', function () {
            this.classList.toggle('enlarged');
        });
    });

    // Slick carousel initialization for comments and creations
    $(document).ready(function () {
        $('.comments-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: true,
            infinite: true,
            adaptiveHeight: true,
            prevArrow: $('.prev-btn'),
            nextArrow: $('.next-btn'),
        });
    });

    // jQuery AJAX to filter decorators by city and specialite
    $(document).ready(function () {
        $('#city, #specialite').on('change', function () {
            const city = $('#city').val();
            const specialite = $('#specialite').val();

            // Send AJAX request to get filtered decorators
            $.ajax({
                url: '{{ route('decorators.list') }}',
                type: 'GET',
                data: { city: city, specialite: specialite },
                success: function (response) {
                    // Update the list of decorators with filtered data
                    $('#filtered-decorators').html(response);
                },
                error: function (xhr) {
                    // Handle errors if any
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

@endsection
