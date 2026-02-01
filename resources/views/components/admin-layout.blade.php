<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
     {{-- SEO & Social meta tags --}}
    <meta name="description" content="Reliable local cleaning company in Preston offering professional cleaning services for homes and properties.Local Cleaning Company in Preston | KatKlean">
    <meta name="keywords" content="cleaning services preston, cleaners preston, domestic cleaning preston, commercial cleaning preston, house cleaning preston, end of tenancy cleaning preston, office cleaning preston, 
        deep cleaning preston, local cleaners preston lancashire">


    

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
    
</head>
<body class="flex bg-slate-200" >
{{--  Navigation --}}
<x-admin-nav.side-nav />
{{--  End of Navigation --}}

{{-- Content --}}
<div class="p-6 w-full justify-center">
    @yield('content')

</div>
{{-- End of Content --}}

{{--  Footer --}}

{{--  End of Footer --}}


</body>
<script src="https://kit.fontawesome.com/b6c120cd7f.js" crossorigin="anonymous"></script>
@yield('extra-js')

<script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</html>