<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
@section('judul_halaman', 'Info Covid-19 di Dunia')
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
</head>
<body>
@section ('konten')
<div class="container">
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Asal Negara</th>
                        <th scope="col">Positif</th>
                        <th scope="col">Sembuh</th>
                        <th scope="col">Meninggal</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 0;
                        @endphp
                    @foreach ($data as $datas)   
                        @php
                            $no++;
                        @endphp
                      <tr>
                        <th scope="row">{{ $no }}</th>
                        <td>{{ $datas['attributes']['Country_Region'] }}</td>
                        <td>{{ $datas['attributes']['Confirmed'] }}</td>
                        <td>{{ $datas['attributes']['Recovered'] }}</td>
                        <td>{{ $datas['attributes']['Deaths'] }}</td>
                      </tr>
                    @endforeach 
                    </tbody>
                  </table>
    </div>
    <footer class="blog-footer">
      <p><a href="/">Kembali ke Menu Utama</a>
      <a href="#">Kembali ke Atas</a></p>
    </footer>
</body>
</html>