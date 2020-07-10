@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<h3>Info-Tag (Edit)</h3>
<a href="/infoedit"> Kembali</a>
<br/>
<br/>
<form method="post" action="/infotag/update/{{ $infotag ->id }}">
{{ csrf_field() }}
{{ method_field('PUT') }}

							<div class="form-group">
                            <label>Id Info Kesehatan</label>
                            <textarea name="info_id" class="form-control" placeholder="info_id">{{$infotag->info_id}}</textarea>

                            @if($errors->has('info_id'))
                                <div class="text-danger">
                                    {{ $errors->first('info_id')}}
                                </div>
                            @endif

                        </div>

                        <b>Untuk Isi Id Info Kesehatan, <a href="/infoedit"> Klik Disini</a></b>
 
                        <div class="form-group">
                            <label>Id Tag</label>
                            <textarea name="tag_id" class="form-control" placeholder="tag_id">{{$infotag->tag_id}}</textarea>

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
