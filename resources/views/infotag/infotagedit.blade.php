@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')

<div class="container">
	<div class="card mt-5">
	<div class="card-body">
	<h3 class="text-center">Daftar Info-Tag</h3>
	<div class="container">
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Id Info Kesehatan</th>
                        <th scope="col">Id Tag</th>
                        <th scope="col">Lanjutan</th>
                      </tr>
                    </thead>
                    <tbody> 
                    @foreach ($infotag as $it) 
                      <tr>
                        <td>{{ $it->id}}</td>
                        <td>{{ $it->info_id}}</td>
                        <td>{{ $it->tag_id}}</td>
                        <td>
						<a href="/infotag/edit/{{ $it->id }}">Edit</a>
						|
						<a href="/infotag/hapus/{{ $it->id }}">Hapus</a>
						</td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
    </div>
</div>
</div>
</div>
Halaman : {{ $infotag->currentPage() }} <br/>
Jumlah Data : {{ $infotag->total() }} <br/>
Data Per Halaman : {{ $infotag->perPage() }} <br/>
 
 
{{ $infotag->links() }}

@endsection 
</body>
</html>