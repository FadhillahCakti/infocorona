@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')


<h2 class="jumbotron-heading text-center">Tambah Info-Tag</h2>
<form method="post" action="/infotag/store">
{{ csrf_field() }}
						<div class="form-group">
                            <label>Id Info Kesehatan</label>
                            <input type="text" name="info_id" class="form-control" placeholder="info_id">

                            @if($errors->has('info_id'))
                                <div class="text-danger">
                                    {{ $errors->first('info_id')}}
                                </div>
                            @endif

                        </div>

                        <b>Untuk Isi Id Info Kesehatan, <a href="/infoedit"> Klik Disini</a></b>

                        <div class="form-group">
                            <label>Id Tag</label>
                            <input type="text" name="tag_id" class="form-control" placeholder="tag_id">

                             @if($errors->has('tag_id'))
                                <div class="text-danger">
                                    {{ $errors->first('tag_id')}}
                                </div>
                            @endif

                        </div>

                        <b>Untuk Isi Id Tag, <a href="/tagedit"> Klik Disini</a></b>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

</form>

@endsection 
</body>
</html>
