@extends('_layouts.master')

@section('content')
<!-- <div class="header__menu">
        <div class="menu__item">
            <h4 class="line-animation-link chef__item underline-link">Le Chef</h4>
        </div>
        <div class="menu__item">
            <a target="_blank" href="menu.pdf"><h4 class="line-animation-link menu__item underline-link">Le Menu</h4></a>
        </div>
        <div class="menu__item"> 
            <h4 class="line-animation-link sando__item underline-link">Le Sando</h4>
        </div>
    </div> -->
<div class="plan__content">
    <div id="mapbox">

    </div>
</div>


<div class="home__content">
    <div class="logo__content">
    <div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide"><img src="slider/Y_3.jpg"></div>
    <div class="swiper-slide"><img src="slider/Y_1.jpg"></div>
    <!-- <div class="swiper-slide"><img src="slider/Y_2.jpg"></div> -->

    <div class="swiper-slide"><img src="slider/Y_4.jpg"></div>
    <div class="swiper-slide"><img src="slider/Y_5.jpg"></div>
    <div class="swiper-slide"><img src="slider/Y_6.jpg"></div>
    <div class="swiper-slide"><img src="slider/Y_7.jpg"></div>
    <div class="swiper-slide"><img src="slider/Y_8.jpg"></div>
    <div class="swiper-slide"><img src="slider/min_Y_1.jpg"></div>
    <div class="swiper-slide"><img src="slider/min_Y_2.jpg"></div>
    <div class="swiper-slide"><img src="slider/min_Y_3.jpg"></div>
    <div class="swiper-slide"><img src="slider/min_Y_4.jpg"></div>
    <!-- <div class="swiper-slide"><img src="slider/Y_9.jpg"></div> -->
   
   
  </div>
  <!-- If we need pagination -->
  

  <!-- If we need navigation buttons -->
  <!-- <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div> -->

  <!-- If we need scrollbar -->
  
</div>
<div class="title__slide">
    <span>BEST SANDO IN PARIS </span>
    <span>Tasty sandwich Japonais <br/> du chef Walter Ishizuka</span>
</div>
        </div>
    <div class="informations__content">
        <div class="field__content">
            <p>Horaires</p>
       <span>
            lundi à jeudi : 11h-19h <br/>
vendredi - samedi - dimanche <br/> 11h - 21h <br/>
Sur place - a emporter - livraison - events

            </span>
        </div>
        <div class="field__content">
            <p>Adresse</p>
            <span><a target="_blank"
                    href="https://www.google.fr/maps/place/5+Rue+des+Quatre+Vents,+75006+Paris/@48.8486193,2.341305,15.06z/data=!4m5!3m4!1s0x47e671d951419acb:0xd3b30d7d9b0f3a62!8m2!3d48.8516532!4d2.3381099">3-5
                    rue des quatre vents<br>75006 Paris </a></span>
        </div>
        <div class="field__content">
            <p>Contact</p>
            <span><a href="mailto:contact@yabaisando.com">contact@yabaisando.com</a></span> <br/>
            <span><a href="tel:+33(0)142013082">+33 (0)1 42 01 30 82</a></span>
        </div>
        <div class="field__content">
            <p>Social</p>
            <a href="https://www.instagram.com/yabai.sando/" target="_blank"><span>instagram</span></a>
        </div>
       
    </div>

</div>
<div class="toggle__content">
    <input type="checkbox" name="map_checkbox" id="toggle" class="toggle">
    <!-- <label for="toggle"> </label>
     <p>VIEW ON THE MAP</p> -->
</div>
@endsection