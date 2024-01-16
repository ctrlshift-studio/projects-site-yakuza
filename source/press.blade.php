---
permalink: press.html
---

@extends('_layouts.master')

@section('title', 'Page not found')

@section('content')
<style>
    .swiper {
        width: 100%;
        height: 100%;
    }
    .swiper-pagination-bullet{
        background-color:white;
    }
    
    .swiper-android .swiper-slide, .swiper-wrapper{
        width: 100%!important;
        transform: translate3d(0px, 0px, 0px)!important;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
width: 100%!important;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .swiper-slide a img {
        display: block;
        width: 15vh;
        height: 100%;
        margin: 2vh auto;
    }
</style>
<div class="press__content">
    <div class="container">
        <h2>ON PARLE DE NOUS :</h2>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide press_item">
                    <a href="https://www.lofficiel.com/food/5-plats-teintes-de-noir-a-devorer-pour-halloween">
                        <h3>“Faites abstraction du mystérieux noir de sa robe, du rouge ardent de sa viande comme à vif,
                            et laissez vos papilles s’extasier sur cette merveille culinaire. ”</h3>

                        <img src="lofficel.png">
                    </a></div>
                <div class="swiper-slide press_item"> <a
                        href="https://www.vogue.fr/lifestyle/food/story/katsu-sando-tuna-katsu-sando-les-meilleurs-sandwichs-japonais-a-paris/4044">
                        <h3>“Ce nouvel hot spot food expert en sandos.”</h3>

                        <img src="vogue.png">
                    </a></div>
                <div class="swiper-slide press_item"> <a
                        href="https://www.cosmopolitan.fr/meilleures-adresses-parisiennes-rentree,2033024.asp">
                        <h3>“Des recettes étonnantes et décalées, parfaites pour découvrir ce plat culte de la cuisine
                            nippone.”</h3>

                        <img src="cosmopolitain.png">
                    </a></div>
                <div class="swiper-slide press_item"> <a
                        href="https://www.sortiraparis.com/hotel-restaurant/restaurant/articles/280912-yakuza-katsu-sando-coffee-le-concept-gourmand-signe-walter-ishizuka-a-paris">
                        <h3>“Un lieu moderne et chaleureux où l’on peut venir savourer cette spécialité nippone en toute décontraction. Ici le sando est décliné dans une version gourmet, à base de produits de qualité.
Prêt à voyager au Japon en dégustant l'un de ces savoureux sandos signés Walter Ishizuka 
”</h3>

                        <img src="sortiraparis.png">
                    </a></div>
                <div class="swiper-slide press_item"> <a
                        href="http://www.infrarouge.fr/le-top-9-des-restaurants-japonais-a-paris/">
                        <h3>“Le top 9 des restaurants japonais à Paris<br>
Pain moelleux à souhait ; panure panko ultra crispy ; sauce tonkatsu… tout y est.<br>
Les novices comme les connaisseurs seront conquis à coup sûr !
”</h3>

                        <img src="infrarouge.png">
                    </a></div>
                <div class="swiper-slide press_item"> <a
                        href="https://www.grazia.fr/cuisine/restaurants/adresses-gourmandes-reconfortantes-immanquables-de-lar-etnree-apprehender-lautombne-670361.html#item=1">
                        <h3>“Les adresses gourmandes et réconfortantes immanquables de la rentrée pour appréhender l’automne. Nous plonge dans la culture japonaise comme il se doit. Le sando se décline dans des versions très gourmets
”</h3>

                        <img src="grazia.png">
                    </a></div>
                <div class="swiper-slide press_item"> <a
                        href="https://www.lepoint.fr/gastronomie/le-gout-de-paris-pourquoi-vous-allez-adorer-le-yakuza-katsu-sando-coffee-26-10-2022-2495377_82.php">
                        <h3>“Pourquoi vous allez adorer le Yabaï Sando ?
La recette signature au bœuf wagyu, premier effet waouh à l'ouverture de la boîte qui renferme le sandwich.
Le deuxième effet waouh vient de l'appétissante odeur qu'il dégage lorsqu'on l'approche de la bouche, l'un des grands plaisirs des sandwichs chauds.”</h3>

                        <img src="lepoint.png">
                    </a></div>

            </div>
           
        </div>
        <!-- <div class="swiper-pagination"></div> -->
    </div>
</div>
</div>
<script>
    var swiper = new Swiper(".mySwiper", {
    
        spaceBetween: 30,
        loop:true,
       
         breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 1,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 50,
          },
        },
    });
</script>
@endsection