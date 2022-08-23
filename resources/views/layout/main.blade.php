<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    

    
    <link rel="stylesheet" href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}">

    <title>BimbelQ | {{ $title }}</title>
  </head>
  <body>

    

      <div class="container">
        @yield('container')
      </div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  </body>
</html>