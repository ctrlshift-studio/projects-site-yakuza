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
    <!-- <div class="logo__content">
            <img src="logo.png">
        </div> -->
    <div class="informations__content">
        <div class="field__content">
            <p>Horaires</p>
       
            <span>Lundi : 10h - 17h <br>
                Mardi & Mercredi : 10h-19h<br>

                  Jeudi, Vendredi & Samedi : 10h-22h<br>
                  Dimanche : Fermé</span>
        </div>
        <div class="field__content">
            <p>Adresse</p>
            <span><a target="_blank"
                    href="https://www.google.fr/maps/place/5+Rue+des+Quatre+Vents,+75006+Paris/@48.8486193,2.341305,15.06z/data=!4m5!3m4!1s0x47e671d951419acb:0xd3b30d7d9b0f3a62!8m2!3d48.8516532!4d2.3381099">3-5
                    rue des quatre vents<br>75006 Paris </a></span>
        </div>
        <div class="field__content">
            <p>Contact</p>
            <span><a href="mailto:contact@yabaisando.com">contact@yabaisando.com</a></span>
        </div>
        <div class="field__content">
            <p>Social</p>
            <a href="https://www.instagram.com/yabaisando/" target="_blank"><span>instagram</span></a>
        </div>
        <div class="description">
            <img src="yabai.png"> 
                <p>Profitez du pop-up Yabaï Sando<br>
               jusqu'à fin mars à <a href="https://www.google.com/maps/place/Samaritaine/@48.8594088,2.3424653,15z/data=!4m2!3m1!1s0x0:0x35361b69f3e8956c?sa=X&ved=2ahUKEwiYqITcmNH7AhVGi1wKHVTJADwQ_BJ6BAh5EAg" target="_blank">La Samaritaine !</a>
                </p>  
</div>
    </div>

</div>
<div class="toggle__content">
    <input type="checkbox" name="map_checkbox" id="toggle" class="toggle">
    <!-- <label for="toggle"> </label>
     <p>VIEW ON THE MAP</p> -->
</div>
@endsection