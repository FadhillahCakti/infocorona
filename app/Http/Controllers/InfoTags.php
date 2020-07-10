<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InfoTag;

class InfoTags extends Controller
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

	public function infotagedit()
    {
    	$infotag = InfoTag::paginate(10);
    	return view('infotag.infotagedit', ['infotag' => $infotag]);
	}
	
    public function infotag_tambah()
    {
    	return view('infotag.infotag_tambah');
    }

    public function infotag_store(Request $request)
    {
    	$this->validate($request,[
    		'info_id' => 'required',
    		'tag_id' => 'required'
    	]);
 
        InfoTag::create([
    		'info_id' => $request->info_id,
			'tag_id' => $request->tag_id
    	]);
 
    	return redirect('/infoedit');
	}

    public function infotag_edit($id)
	{
   		$infotag = InfoTag::find($id);
   		return view('infotag.infotag_edit', ['infotag' => $infotag]);
	}

	public function infotag_update($id, Request $request)
	{
    	$this->validate($request,[
    		'info_id' => 'required',
    		'tag_id' => 'required'
    ]);
 
    	$infotag = InfoTag::find($id);
    	$infotag->info_id = $request->info_id;
		$infotag->tag_id = $request->tag_id;
		$infotag->save();
    	return redirect('/infoedit');
	}

	public function infotag_hapus($id)
	{
		$infotag = InfoTag::find($id);
		$infotag->delete();
		return redirect('/infoedit');
	}
}