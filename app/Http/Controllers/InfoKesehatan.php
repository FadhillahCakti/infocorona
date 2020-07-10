<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use App\Tag;

class InfoKesehatan extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function infoedit()
    {
    	$info = Info::paginate(10);
    	return view('info.infoedit', ['info' => $info]);
    }

    public function info_tambah()
    {
    	return view('info.info_tambah');
    }

    public function info_store(Request $request)
    {
    	$this->validate($request,[
    		'gambar' => 'required',
    		'judul' => 'required',
			'keterangan' => 'required',
			'selengkapnya' => 'required'
    	]);
 
        Info::create([
    		'gambar' => $request->gambar,
			'judul' => $request->judul,
    		'keterangan' => $request->keterangan,
			'selengkapnya' => $request->selengkapnya
    	]);
 
    	return redirect('/infoedit');
	}

    public function info_edit($id)
	{
   		$info = Info::find($id);
   		return view('info.info_edit', ['info' => $info]);
	}

	public function info_update($id, Request $request)
	{
    	$this->validate($request,[
    		'gambar' => 'required',
    		'judul' => 'required',
    		'keterangan' => 'required',
            'selengkapnya' => 'required'
    ]);
 
    	$info = Info::find($id);
    	$info->gambar = $request->gambar;
    	$info->judul = $request->judul;
    	$info->keterangan = $request->keterangan;
		$info->selengkapnya = $request->selengkapnya;
    	$info->save();
    	return redirect('/infoedit');
	}

	public function info_hapus($id)
	{
		$info = Info::find($id);
		$info->delete();
		return redirect('/infoedit');
	}
}