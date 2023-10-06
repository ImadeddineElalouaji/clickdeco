@extends('layouts.app')

@section('content')

    
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
  pointer-events: none;
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

  <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js'></script><script  src="./script.js"></script>
  
<div class="menu1">
    
  @foreach ($decorator_images as $image)
  <div class="menu--item1">
      <figure>
          <a href="{{ route('decorator.show', $image->decorator_submission_id) }}">
              <div class="creation-item1">
                  <img src="{{ asset('storage/' . $image->path) }}" alt="Creation Image">
              </div>
          </a>
      </figure>
  </div>
@endforeach

    </div>
  </div>
@endsection

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
@endsection


{{-- <style>
    /* Optional styling for the slider */
    .creations-slider {
        margin: 20px auto;
    }
    .creation-item {
        text-align: center;
    }
    .creation-item img {
        max-width: 100%;
        height: auto;
    }
</style> --}}
