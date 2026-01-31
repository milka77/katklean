<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Google tag (gtag.js) -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-HKGPEN7RE0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-HKGPEN7RE0');
    </script> --}}
    {{-- Laravel Cookie consent  --}}
    {!! CookieConsent::styles() !!}
    {{-- Laravel Cookie consent  --}}

    {{-- SEO & Social meta tags --}}
    <meta name="description" content="Reliable local cleaning company in Preston offering professional cleaning services for homes and properties.Local Cleaning Company in Preston | KatKlean">
    <meta name="keywords" content="cleaning services preston, cleaners preston, domestic cleaning preston, commercial cleaning preston, house cleaning preston, end of tenancy cleaning preston, office cleaning preston, 
        deep cleaning preston, local cleaners preston lancashire">


    <meta property="og:title" content="KatKlean" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://katklean.co.uk" />
    <meta property="og:image" content="{{ asset('images/katklean_logo_meta.png') }}" />
    <meta property="og:description" content="Local Cleaning Company in Preston | KatKlean" />
    <meta name="theme-color" content="#FF0000">


    <meta name="twitter:card" content="summary_large_image">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    @vite('resources/css/app.css')
    <title>{{ config('app.name', 'KatKlean') }}</title>
    @yield('extra-style')
    <style>
        body {
        
        background-image: url('{{ asset('images/4545.png') }}');
        background-size: cover;
        background-position: fixed;
        
        }
    </style>
</head>
<body>
{{--  Navigation --}}
<x-site-nav.site-navbar/>
{{--  End of Navigation --}}

{{-- Content --}}
@yield('content')
{{-- End of Content --}}

{{--  Footer --}}
<x-site-nav.site-footer/>
{{--  End of Footer --}}

{!! CookieConsent::scripts() !!}
</body>
<script src="https://kit.fontawesome.com/b6c120cd7f.js" crossorigin="anonymous"></script>
@yield('extra-js')
<script>
    document.getElementById("menu-toggle").addEventListener("click", function () {
        const menu = document.getElementById("mobile-menu");
        if (menu.classList.contains("hidden")) {
            menu.classList.remove("hidden");
            menu.classList.add("flex");
        } else {
            menu.classList.add("hidden");
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</html>