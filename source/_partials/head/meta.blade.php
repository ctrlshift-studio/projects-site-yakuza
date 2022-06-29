<!-- seo/social -->
<link rel="canonical" href="{{ $page->getUrl() }}">
<meta name="identifier-url" content="https://www.yakuzasando.com/" />
<meta name="title" content="YAKUZA KATSU SANDO &amp; COFFEE - COMING SOON" />
<meta name="description" content="YAKUZA KATSU SANDO &amp; COFFEE - A new restaurant concept around the Sando associate to the coffee. Opening in September 2022 in Paris." />
<meta name="abstract" content="YAKUZA KATSU SANDO &amp; COFFEE - A new restaurant concept around the Sando associate to the coffee. Opening in September 2022 in Paris." />
<meta name="keywords" content="Sando, Coffee, Katsu, Paris" />
<meta name="author" content="YAKUZA KATSU SANDO &amp; COFFEE" />
<meta name="revisit-after" content="5" />
<meta name="language" content="FR" />
<meta name="copyright" content="© 2022 YAKUZA KATSU SANDO &amp; COFFEE" />
<meta name="robots" content="All" />

<meta property="og:title" content="{{ $page->title ?: $page->site->title }}">
<meta property="og:description" content="{!! $page->excerpt() ?: $page->site->description !!}">
<meta property="og:image" content="{{ $page->image ?: media($page->site->image) }}">
<meta property="og:type" content="{{ $page->isPost ? 'article' : 'website' }}">
<meta property="og:site_name" content="{{ $page->site->title }}">
<meta property="og:url" content="{{ $page->getUrl() }}">

<meta name="twitter:title" content="{{ $page->title ?: $page->site->title }}">
<meta name="twitter:description" content="{!! $page->excerpt() ?: $page->site->description !!}">
<meta name="twitter:image" content="{{ $page->image ?: media($page->site->image) }}">
<meta name="twitter:creator" content="{{ '@' . basename($page->links->twitter) }}">
<meta name="twitter:site" content="{{ '@' . basename($page->links->twitter) }}">
<meta name="twitter:card" content="summary">
<!-- end seo/social -->
