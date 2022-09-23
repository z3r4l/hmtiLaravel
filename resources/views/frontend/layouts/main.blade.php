<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="HMTI UIS">
  <meta name="description" content="Website HMTI UIS">
  <meta name="keywords" content="HMTI UIS Adalah">
  <link rel=" stylesheet" href="/css/home.css">
  <link rel="icon" type="image/x-icon" href="https://i.postimg.cc/3WMWymN2/LOGO-HMTI-UIS-NEW-2020.png">
  <title>HMTI UIS</title>

  {{-- Start CDN Icon Bootstrap --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  {{-- End CDN Icon Bootstrap --}}

  {{-- Start CDN CSS Bootstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  {{-- End CDN CSS Bootstrap --}}
  {{-- Start CDN Jquery --}}
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  {{-- END CDN Jquery --}}
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

  {{-- Start Ajax Script Infinite Scroll --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>


  {{-- END Ajax Script Infinite Scroll --}}

  {{-- Start CDN Lazy Load --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"
    integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  {{-- END CDN Lazy Load --}}

</body>

</html>