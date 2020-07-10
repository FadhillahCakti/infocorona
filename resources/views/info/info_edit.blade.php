@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<h3>Info (Edit)</h3>
<a href="/infoedit"> Kembali</a>
<br/>
<br/>
<form method="post" action="/infokesehatan/update/{{ $info ->id }}">
{{ csrf_field() }}
{{ method_field('PUT') }}

							<div class="form-group">
                            <label>Gambar</label>
                            <textarea name="gambar" class="form-control" placeholder="Gambar">{{$info->gambar}}</textarea>

                            @if($errors->has('gambar'))
                                <div class="text-danger">
                                    {{ $errors->first('gambar')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Judul</label>
                            <textarea name="judul" class="form-control" placeholder="Judul">{{$info->judul}}</textarea>

                             @if($errors->has('judul'))
                                <div class="text-danger">
                                    {{ $errors->first('judul')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="keterangan" class="form-control" placeholder="Keterangan">{{$info->keterangan}}</textarea>

                            @if($errors->has('keterangan'))
                                <div class="text-danger">
                                    {{ $errors->first('keterangan')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Selengkapnya</label>
                            <textarea name="selengkapnya" class="form-control" placeholder="Selengkapnya">{{$info->selengkapnya}}</textarea>

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
