<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  @vite('resources/css/app.css')
  <title>{{ config('app.name', 'Laravel') }}</title>
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
</html>