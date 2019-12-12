<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Session\Store;
use App\User;
use Lots;
use News;
use App\Lot;


class PagesController extends Controller
{
    
    function getLots(){
        $lots = Lot::all();
    	return view('admin.adm_lots')->with('lots', $lots);    	
    }

    function getNews(){
        $news=News::all();
    	return view('admin.adm_news')->with('news', $news);
    }

    function getAdmin(){
        $users = User::all();
    	return view('admin.adm_page')->with('users', $users);
    }

    function getAboutMe(){
        return view('aboutme');
    }

    function getContact(){
        return view('contact_us');
    }

    public function store(Request $request)
    {
        
        
    }

}
