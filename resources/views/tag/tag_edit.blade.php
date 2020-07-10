@extends ('index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<h3>Tag (Edit)</h3>
<a href="/tagedit"> Kembali</a>
<br/>
<br/>
<form method="post" action="/tag/update/{{ $tag ->id }}">
{{ csrf_field() }}
{{ method_field('PUT') }}

							<div class="form-group">
                            <label>Tag</label>
                            <textarea name="tag" class="form-control" placeholder="tag">{{$tag->tag}}</textarea>

                            @if($errors->has('tag'))
                                <div class="text-danger">
                                    {{ $errors->first('tag')}}
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
