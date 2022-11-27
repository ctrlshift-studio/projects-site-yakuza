<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
    Yakuza Katsu Sando &amp; Coffee - Food Concept Gourmet Katsu Sando
    </title>

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    <!-- @include('_partials.cms.identity_widget') -->
    <link rel="stylesheet" href="https://use.typekit.net/hhh6san.css">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <section class="loader">
         <div class="loader__content">
             <img src="/logo.png" class="flash">
             <div class="loader-line"></div>
         </div>
    </section>
    @include('_partials.header')
    <section class="home">        
            @yield('content')
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
<script>
  mapboxgl.accessToken = 'pk.eyJ1IjoiYWJkZWxlbG1hbnNhcmkiLCJhIjoiY2tiMm90azd1MDE0bTJ5anp4dm00ZGthbiJ9.-Sqg-mUbWzKNO7WdiM4GHA';
  const map = new mapboxgl.Map({
    container: 'mapbox',
    style: 'mapbox://styles/abdelelmansari/cl27c0ouh005915pfyknofogb',
    //center: [5.378,43.294], 
 
    center: [2.338, 48.852], 
    zoom: 16,
    attributionControl: true,
    interactive: true,
  });

  const marker = document.createElement('div');
  const markerImg = document.createElement('div');
  marker.className = 'marker';
  marker.appendChild(markerImg); 
  new mapboxgl.Marker(marker).setLngLat([2.338, 48.852]).addTo(map);
</script>
            <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    
    @includeWhen($page->production && $page->services->analytics, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
