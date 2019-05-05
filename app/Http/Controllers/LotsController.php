<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lots;
use DB;

class LotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function getCreate(){
    return view('contents.createLots');
}

public function search(Request $search){

    $lots = Lots::where('category', $search->input('search'))->get();
    // dd($lots);
    return view('contents.lots',  ['lots' => $lots]);
}

public function recentLots(){
        $lots = Lots::orderBy('id', 'desc')->paginate(6);
        return view('contents.index', ['lots' => $lots]);
}

    public function index()
    {
       $lots = Lots::all();
       return view('contents.lots')->with('lots', $lots);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'lot_name' => 'required|min:5',
            'category' => 'required|min:10',
            'bid_price' => 'required|min:15',
            'created_at' => 'required|min:20'
        ]);
        
        $lots->save();
        //Auth::user()->posts()->save($post);   
        //$post->tags()->attach($request->input('tags') === null ? [] : $request->input('tags'));

        return redirect()->route('contents.lots');     

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lots = Lots::find('category', $id);
        return view('contents.lots')->with('category ', $lots);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
