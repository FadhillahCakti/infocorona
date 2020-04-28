<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Info Covid-19</title>
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
</head>
<body>
<header>
 
 <h2>Info Corona</h2>
 <nav>
   <a href="/indonesia">Indonesia</a>
   |
   <a href="/provinsi">Provinsi</a>
   |
   <a href="/dunia">Dunia</a>
 </nav>
</header>
      <h3> @yield ('judul_halaman')</h3>

      @yield('konten')
  </body>
</html>