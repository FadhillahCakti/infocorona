@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<div class="card-header text-center">
<a>Untuk Menambah Info Kesehatan, </a>
<a href="/infokesehatan/tambah" class="btn btn-link">Klik Disini</a>
</div>
<div class="card-header text-center">
<a>Untuk Melihat CRUD yang Lainnya, </a>
<a href="/home" class="btn btn-link">Klik Disini</a>
</div>


<div class="container">
	<div class="card mt-5">
	<div class="card-body">
	<h3 class="text-center">Info Kesehatan</h3>
	<div class="container">
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Isi</th>
						<th scope="col">Lanjutan</th>
                      </tr>
                    </thead>
					<tbody>
@foreach($info as $infos)
<tr>
<td>{{ $infos->id}}</td>
<td><img src="{{ $infos->gambar}}" style="width:75x;height:100px;"></td>
<td><strong>{{ $infos->judul }}</strong></br>
Keterangan :</br> {{ $infos->keterangan }}</br>
Tag :
@foreach($infos->tag as $t)
 {{ $t->tag }},
@endforeach </td>
<td>
<a href="/infokesehatan/edit/{{ $infos->id }}">Edit</a>
|
<a href="/infokesehatan/hapus/{{ $infos->id }}">Hapus</a></br>
<a href="/infotag/tambah">Tambah Info-Tag</a></br>
<a href="/infotagedit">Edit&Hapus Info-Tag</a>
</td>
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
