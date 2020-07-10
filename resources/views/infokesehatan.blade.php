@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')


<p>Untuk Cari Kata Kunci Judul :</p>
<form action="/infokesehatan/cari" method="GET">
<input type="text" name="cari" placeholder="Cari Kata Kunci Judul" value="{{ old('cari') }}">
<input type="submit" value="Cari">
</form>

<div class="container">
	<div class="card mt-5">
	<div class="card-body">
	<h3 class="text-center">Info Kesehatan</h3>
<table class="table table-bordered table-striped">
<tbody>
@foreach($info as $infos)
<tr>
<td><img src="{{ $infos->gambar}}" style="width:75x;height:100px;"></td>
<td><strong>{{ $infos->judul }}</strong></br>
Keterangan :</br> {{ $infos->keterangan }}</br>
Tag :
@foreach($infos->tag as $t)
 {{ $t->tag }},
@endforeach 
</td>
<td><a href ="{{$infos->selengkapnya}}" class ="btn btn-primary">Selengkapnya</a></td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
Halaman : {{ $info->currentPage() }} <br/>
Jumlah Data : {{ $info->total() }} <br/>
Data Per Halaman : {{ $info->perPage() }} <br/>
 
 
{{ $info->links() }}
 @endsection 
</body>
</html>
