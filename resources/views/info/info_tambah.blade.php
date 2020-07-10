@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<h3>Info (Tambah)</h3>
<a href="/infoedit"> Kembali</a>
<br/>
<br/>
<form method="post" action="/infokesehatan/store">
{{ csrf_field() }}
						<div class="form-group">
                            <label>Gambar</label>
                            <input type="text" name="gambar" class="form-control" placeholder="Gambar">

                            @if($errors->has('gambar'))
                                <div class="text-danger">
                                    {{ $errors->first('gambar')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="judul" class="form-control" placeholder="Judul">

                             @if($errors->has('judul'))
                                <div class="text-danger">
                                    {{ $errors->first('judul')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">

                            @if($errors->has('keterangan'))
                                <div class="text-danger">
                                    {{ $errors->first('keterangan')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Selengkapnya</label>
                            <input type="text" name="selengkapnya" class="form-control" placeholder="Selengkapnya">

                            @if($errors->has('selengkapnya'))
                                <div class="text-danger">
                                    {{ $errors->first('selengkapnya')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

 @endsection 
</body>
</html>
