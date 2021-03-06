<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lot;

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
            $lots = Lot::orderBy('id', 'desc')->paginate(6);
            return view('contents.index', ['lots' => $lots]);
    }

    public function getLot($id)
    {
        $lot = Lot::where('id', $id)->first();
        return view('contents.lot')->with('lot', $lot);
    }

    public function postBid(Request $request)
    {
        $lot = Lot::find($request->input('lot_id'));

        $currentHighestBid = $lot->highest_bid;

        $this->validate($request, [
            'bid_amount' => "required|gt:$currentHighestBid",
        ]);

//        if(Gate::denies('bid', $lot)){
//            return redirect()->back();
//        }

        $lot->highest_bid = $request->input('bid_amount');
        $lot->save();

        return back()->with('info', 'Bid made, new Bid is: $' . $request->input('bid_amount'));
    }

    public function index()
    {
       $lots = Lot::all();
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
    public function createLot(Request $request)
    {
        
        $this->validate($request, [
            'title' => 'bail|required|min:5',
            'category' => 'required|min:10',
            'description' => 'bail|required|min:5',
            'price' => 'required|regex:[^a-zA-Z]',
            'deadline' => 'required|date',
            'images[]' => 'image',
            'country'=>'min:4|regex:[^1-9]',
            'client-city'=>'min:4|regex:[^1-9]',
            'client-name'=>'min:4|regex:[^1-9]',
            'client-mail'=>'min:4',
            'client-phone'=>'min:4',
            'client-address'=>'min:4',
            'created_at' => 'required|date'

        ]);
        
        
        //$lots->save();
        //Auth::user()->posts()->save($post);   
        //$post->tags()->attach($request->input('tags') === null ? [] : $request->input('tags'));
        return redirect ()
        ->route ('admin . index ')
        ->with ('info ', 'Post created , Title is: '.$request -> input ('title '));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lots = Lot::find('category', $id);
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
