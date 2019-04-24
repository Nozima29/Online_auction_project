<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Session\Store;
use App\User;
use Lots;

class PagesController extends Controller
{
    
    function getLots(){
        $lots = Lots::all();
    	return view('admin.adm_lots')->with('lots', $lots);    	
    }

    function getNews(){
    	return view('contents.news');
    }

    function getAdmin(){
        $users = User::all();
    	return view('admin.adm_page')->with('users', $users);
    }

    public function store(Request $request)
    {
        
        
    }

}
