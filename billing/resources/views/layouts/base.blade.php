<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyecto Oscar </title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container">

  <div> @yield('addproducto') </div>
    <div> @yield('addfactura') </div>

  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>

