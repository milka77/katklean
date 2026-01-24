<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

</html>