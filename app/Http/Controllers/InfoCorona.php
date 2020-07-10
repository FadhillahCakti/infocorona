<?php
 
namespace App\Http\Controllers;
 
use App\Info;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
 
class InfoCorona extends Controller
{

    public function indonesia()
    {
        $response = Http::get('https://api.kawalcorona.com/indonesia');
        $data = $response->json();
//        dd($data);
        return view('indonesia',compact('data'));
    }

    public function provinsi()
    {
        $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $data = $response->json();
//        dd($data);
        return view('provinsi',compact('data'));
    }

    public function dunia()
    {
        $response = Http::get('https://api.kawalcorona.com');
        $data = $response->json();
//        dd($data);
        return view('dunia',compact('data'));
    }

    public function detilprovinsi()
    {
        return view('detilprovinsi');
    }

    public function infokesehatan()
    {
        $info = Info::paginate(10);
    	return view('infokesehatan', ['info' => $info]);
	}
   
    public function carijudul(Request $request)
    
    {
    // menangkap data pencarian
    $carijudul = $request->carijudul;
     // mengambil data dari table info sesuai pencarian data
    $tag = Tag::where('tag','like',"%".$carijudul."%")->paginate(10);
     // mengirim data info ke view index
    return view('infokesehatan',['tag' => $tag]);
    }

}
 