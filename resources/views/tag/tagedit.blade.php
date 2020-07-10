@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<div class="card-header text-center">
<a>Untuk Menambah Tag Untuk Label Info Kesehatan, </a>
<a href="/tag/tambah" class="btn btn-link">Klik Disini</a>
</div>

<div class="card-header text-center">
<a>Untuk Hal yang Akan Di Tambah/Edit Lainnya,</a>
<a href="/home" class="btn btn-link">Klik Disini</a>
</div>

<div class="container">
	<div class="card mt-5">
	<div class="card-body">
	<h3 class="text-center">Tag Untuk Label Info Kesehatan</h3>
	<div class="container">
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Tag</th>
                        <th scope="col">Lanjutan</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($tag as $tags)  
                      <tr>
                        <td>{{ $tags->id}}</td>
                        <td>{{ $tags->tag}}</td>
                        <td>
						<a href="/tag/edit/{{ $tags->id }}">Edit</a>
						|
						<a href="/tag/hapus/{{ $tags->id }}">Hapus</a>

						</td>
                      </tr>
                    @endforeach 
                    </tbody>
                  </table>
    </div>
</div>
</div>
</div>
Halaman : {{ $tag->currentPage() }} <br/>
Jumlah Data : {{ $tag->total() }} <br/>
Data Per Halaman : {{ $tag->perPage() }} <br/>
 
 
{{ $tag->links() }}
 @endsection 
</body>
</html>
