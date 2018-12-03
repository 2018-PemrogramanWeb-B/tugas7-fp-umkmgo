
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::asset('js/mdb.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/mdb.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

    <!-- Custom styles for this template -->
    <link href="css/album.css" rel="stylesheet">
    {{-- <link href="css/cover.css" rel="stylesheet"> --}}
    @yield('css')
  </head>

  <body @yield('body')>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm fixed-top">
      <h5 class="my-0 mr-md-auto font-weight-normal"><a class="p-2 text-dark" href="/welcome">UMKMgo</a></h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/welcome">Home</a>
        <a class="p-2 text-dark" href="#blog">Blog</a>
        <a class="p-2 text-dark" href="/cari">Eksplorasi</a>
        <a class="p-2 text-dark" href="/login">Login</a>
      </nav>
    </div>
    @yield('content')
  </body>
</html>
