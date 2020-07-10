<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class Tags extends Controller
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

    public function tagedit()
    {
    	$tag = Tag::paginate(10);
    	return view('tag.tagedit', ['tag' => $tag]);
    }

    public function tag_tambah()
    {
    	return view('tag.tag_tambah');
    }

    public function tag_store(Request $request)
    {
    	$this->validate($request,[
    		'tag' => 'required'
    	]);
 
        tag::create([
    		'tag' => $request->tag
    	]);
 
    	return redirect('/tagedit');
	}

    public function tag_edit($id)
	{
   		$tag = Tag::find($id);
   		return view('tag.tag_edit', ['tag' => $tag]);
	}

	public function tag_update($id, Request $request)
	{
    	$this->validate($request,[
    		'tag' => 'required'
    ]);
 
    	$tag = Tag::find($id);
    	$tag->tag = $request->tag;
    	$tag->save();
    	return redirect('/tagedit');
	}

	public function tag_hapus($id)
	{
		$tag = Tag::find($id);
		$tag->delete();
		return redirect('/tagedit');
	}
}