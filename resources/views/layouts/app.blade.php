@section('description', 'Développeur web freelance, je vous accompagne dans la réalisation de votre projet de site internet pour votre entreprise ou votre activité. Je vous propose des solutions sur mesure, adaptées à vos besoins et à votre budget.')

<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Default meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

        <meta name="author" content="MONSIEUR QUENTIN SAR, Netinq">
        <meta name="owner" content="MONSIEUR QUENTIN SAR">
        <meta name="subject" content="MONSIEUR QUENTIN SAR">

        <meta name="identifier-URL" content="sarquentin.fr">
        <meta name="description" content="@yield('descriptio n')">
        <meta name="reply-to" content="pro@sarquentin.fr">

        <meta name="language" content="FR">
        <meta name="target" content="all">
        <meta name="theme-color" content="#E7BD53">

        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}" />

        <!-- Twitter Card meta -->
        <meta name='twitter:card' content='summary_large_image'>
        <meta name="twitter:site" content="@Netinq" />
        <meta name="twitter:title" content="@hasSection('title')@yield('title')@else Créons votre site web sur mesure.@endif" />
        <meta name="twitter:url" content="https://sarquentin.fr" />
        <meta name="twitter:domain" content="sarquentin.fr" />
        <meta name="twitter:description" content="@yield('description')" />
        <meta name="twitter:image" content="{{asset('images/meta.jpg')}}" />

        <!-- Open Graph meta -->
        <meta property="og:title" content="@hasSection('title')@yield('title')@else Créons votre site web sur mesure.@endif" />
        <meta property="og:description" content="@yield('description')" />
        <meta property="og:image" content="{{asset('images/meta.jpg')}}" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://sarquentin.fr" />
        <meta property="og:site_name" content="{{Config::get('app.name')}}" />
        <meta property="author" content="MONSIEUR QUENTIN SAR" />
        <meta property="profile:gender" content="male" />
        <meta property="og:locale" content="fr_FR" />

        <!-- IOS meta -->
        <meta name="apple-mobile-web-app-title" content="{{Config::get('app.name')}}">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "Organization",
                "name": "MONSIEUR QUENTIN SAR",
                "legalName": "MONSIEUR QUENTIN SAR",
                "description": "Créez dès maintenant votre site vitrine dès maintenant. Nous vous accompagnons dans la réalisation d\'un web design, dans le développement technique du site, ainsi que sa mise en ligne et son référencement.",
                "image": "https://sarquentin.fr/images/meta.jpg",
                "logo": "https://sarquentin.fr/images/logo.png",
                "url": "https://sarquentin.fr",
                "email": "pro@sarquentin.fr"
            }
        </script>

        <title>
            @hasSection('title')@yield('title')@else Créons votre site web sur mesure.@endif
        </title>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132838792-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-132838792-1');
        </script>

        @vite('resources/css/master.css')
        @vite('resources/css/app.css')
        @yield('head')
    </head>


    <body class="row" itemscope itemtype="https://schema.org/LocalBusiness">
        <meta itemprop="name" content = "MONSIEUR SAR QUENTIN">
        <meta itemprop="url" content = "https://sarquentin.fr">
        <meta itemprop="telephone" content = "0750976893">
{{--        @include('layouts.header')--}}
        @yield('content')
        @yield('scripts')
    </body>
</html>
