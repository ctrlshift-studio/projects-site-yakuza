@extends('_layouts.master')

@section('content')
    <div class="header__menu">
        <div class="menu__item">
            <h4 class="line-animation-link chef__item underline-link">Le Chef</h4>
        </div>
        <div class="menu__item">
            <a target="_blank" href="menu.pdf"><h4 class="line-animation-link menu__item underline-link">Le Menu</h4></a>
        </div>
        <div class="menu__item"> 
            <h4 class="line-animation-link sando__item underline-link">Le Sando</h4>
        </div>
    </div>
   <div class="plan__content">
       <div id="mapbox">
           
       </div>
   </div>
   <div class="sando__content hidden">
   <div class="bg-img"> 
        <img src="sando.jpeg">
    </div>
    <div class="informations__content">
        <h2>Le Sando</h2>
    <p>
    Le Katsu Sando, ou Sando pour les intimes, est aux japonais ce que le jambon-beurre est aux français. Ce sandwich a vu le jour avec le déve- loppement des chemins de fer. Facile à manger, nourrissant, il est rapi- dement devenu culte. Pour Walter Ishizuka c’est un souvenir d’enfance.Son père le préparait pour les pique-niques familiaux. Lui-même cuisinier d’origine japonaise, installé en France depuis les années 1970, il préparait une version personnelle, différente de la recette traditionnelle au porc pané. 
</p><p>
Aujourd’hui, c’est au tour du fils de proposer sa vision du Sando. Mais que les puristes se rassurent, les marqueurs sont bel et bien respectés. Pain ultra moelleux, panure panko croustillante, sauce tonkatsu, tout y est, avec une touche de mieux.
</p><p>
Le fameux Shokupan, pain spécifique au Sando est réalisé par JULHÈS, à partir de 2 recettes (un pain blanc et un pain noir au charbon) spéciale- ment mises au point avec le chef, qui explique : « J’adore le Sando, mais ça peut être casse-gueule à manger. C’est pour ça que j’ai voulu un pain plus brioché qu’à l’ordinaire. On le toaste légèrement pour en faire ressortir le goût.
</p><p>
C’est hyper fondant et beaucoup plus facile à déguster. » Côté garnitures, un veggie et trois versions sont proposées avec des pro- duits de première qualité: un bœuf wagyu maturé à point, un saumon d’Écosse qui reste bien moelleux après cuisson et un bon poulet fermier. Le tout pané dans les règles de l’art avec de l’œuf et une panure panko, moelleuse et croustillante. Enfin, pour la gourmandise, la fraîcheur et le croquant, chaque version est assortie d’un coleslaw japonais et de pickles maison, mais aussi d’une sauce particulière qui se marie avec la sauce tonkatsu.

</p><p>Pour les desserts, le chef innove aussi, avec un sandwich glacé et un sand- wich sucré, parfum sésame noir ou chocolat noisette. Les thés et les cafés sont confiés à la Maison Coutume, et les limonades bio à la marque Lemo- naid & ChariTea.  </p>
</p>  
<span class="closed__sando">CLOSE</span>
</div>
   </div>
   <div class="chef__content hidden">
    <div class="bg-img">
        <img src="yakuza_bg.webp">
    </div>
        <div class="informations__content">
        <h2>Le Chef Walter Ishizuka</h2>
            <p>
            Dans Yakuza Katsu Sando & Coffee, Walter Ishizuka place tout azimut son aspiration à plus de proximité, son savoir-faire et sa double culture. Depuis plusieurs années, ce chef franco-japonais, rompu aux codes de la haute gastronomie rêve d’ouvrir son coffee shop. C’est à un pas du Carrefour de l’Odéon, pas loin du marché Saint-Germain et du Jardin du Luxembourg, qu’il réalise son vœu mûrement réfléchi pen-dant le confinement. « C’est un quartier dans lequel se croisent toutes les populations parisiennes : des étudiants, des touristes, des travailleurs et des riverains.
</p><br><p>
Mais paradoxalement, il n’y pas beaucoup d’offre en restauration rapide de qualité. Je suis heureux de pouvoir changer la donne » explique-t-il. Justement, en ce qui concerne la qualité, le chef entend mettre le paquet. « C’est en référence au code d’honneur des Yakuzas, que j’ai appelé le restaurant comme cela. Ici, nous sommes à l’opposé de l’opacité des Dark Kitchens. Je serai moi-même en cuisine pour assurer la qualité des produits et la régularité des préparations.Et si le concept se duplique comme je le souhaite, il proposera toujours des sandwiches de chef préparés par un chef. » Et en l’occurrence, il s’agit d’un chef de haute volée. Repéré aux cuisines de The Hoxton Paris, Walter Ishizuka mène depuis 20 ans une carrière entre restaurants étoilés (Paul Bocuse) et cuisines de palaces (Ritz Paris, The Connaught London). 
</p><br><p>
Ici, c’est plus que jamais l’excellence qui l’anime, mais aussi l’éco-responsabilité. Hyper sen- sible à la cause environnementale, il soigne chaque détail de son concept pour réduire au maximum son impact. « Même l’encre de mon tampon est green », s’amuse-t-il. Avant d’énumérer le soin porté à l’ori- gine des produits, à la consommation électrique, à la gestion des déchets et à l’emballage de ses sand- wiches, aussi raffiné que recyclable.
            </p>
            <span class="closed__chef">CLOSE</span>
        </div>
   </div>
   <div class="home__content">
        <div class="logo__content">
            <img src="logo.png">
        </div>
        <div class="informations__content">
            <div class="field__content">
                <p>Horaires</p>
                <span>Opening 6 septembre 2022</span>
            </div>
            <div class="field__content">
                <p>Adresse</p>
                <span><a  target="_blank" href="https://www.google.fr/maps/place/5+Rue+des+Quatre+Vents,+75006+Paris/@48.8486193,2.341305,15.06z/data=!4m5!3m4!1s0x47e671d951419acb:0xd3b30d7d9b0f3a62!8m2!3d48.8516532!4d2.3381099" >3-5 rue des quatre vents<br>75006 Paris </a></span>
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
