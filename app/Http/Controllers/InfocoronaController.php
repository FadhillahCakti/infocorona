<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 
class InfocoronaController extends Controller
{
    public function index()
    {
 //       $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
 //       $data = $response->json();
//        dd($data);
        return view('index');
    }

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
}
 