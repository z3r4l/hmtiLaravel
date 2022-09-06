<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="HMTI UIS">
  <meta name="description" content="Website HMTI UIS">
  <meta name="keywords" content="HMTI UIS Adalah">
  <link rel=" stylesheet" href="/css/home.css">
  <link rel="icon" type="image" href="img/logoHMTI.svg">

  <title>WEBSITE HMTI UIS</title>

  {{-- Start CDN Icon Bootstrap --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  {{-- End CDN Icon Bootstrap --}}

  {{-- Start CDN CSS Bootstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  {{-- End CDN CSS Bootstrap --}}

</head>

<body>

  {{-- Start Navbar --}}
  @include('frontend.partials.navbar')
  {{-- End Navbar --}}

  {{-- Start Scroll automatic button --}}
  @include('frontend.partials.top-button')
  {{-- End Scroll automatic button --}}

  {{-- Start Isi Content --}}
  <div>
    @yield('content')
  </div>
  {{-- End Isi Content --}}

  {{-- Start Footer --}}
  @include('frontend.partials.footer')
  {{-- End Footer --}}

  {{-- START Script Bootstrap --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
  </script>
  {{-- END Script Bootstrap --}}

  {{--START Script Scroll Button Top --}}
  <script src="/js/ButtonToTop.js"></script>
  {{--END Script Scroll Button Top --}}

</body>

</html>