@extends('_layouts.master')

@section('content')
   <div class="plan__content">
       <div id="mapbox">
           
       </div>
   </div>
   <div class="home__content">
        <div class="logo__content">
            <img src="logo.png">
        </div>
        <div class="informations__content">
            <div class="field__content">
                <p>Horaires</p>
                <span>Opening septembre 2022</span>
            </div>
            <div class="field__content">
                <p>Adresse</p>
                <span><a  target="_blank" href="https://www.google.fr/maps/place/5+Rue+des+Quatre+Vents,+75006+Paris/@48.8486193,2.341305,15.06z/data=!4m5!3m4!1s0x47e671d951419acb:0xd3b30d7d9b0f3a62!8m2!3d48.8516532!4d2.3381099" >3-5 rue des quatre vents, 75006 Paris </a></span>
            </div>
            <div class="field__content">
                <p>Contact</p>
                <span><a href="mailto:walter@yakuzasando.com">walter@yakuzasando.com</a></span>
            </div>
            <div class="field__content">
                <p>Social</p>
                <a href="https://www.instagram.com/yakuzasando/" target="_blank"><span>instagram</span></a>
            </div>
        </div>
      
   </div>
   <div class="toggle__content">
        <input type="checkbox" name="map_checkbox" id="toggle" class="toggle">
  <label for="toggle"> </label>
  <p>VIEW ON THE MAP</p>
        </div>
@endsection
