<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class RegisController extends Controller {
    
    public function checkRegis(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail|required|min:5',
            'username' => 'bail|required|min:5',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'bail|required|min:6',
            'email' => 'required|email',
        ]);
  return redirect ()
        ->route ('contents.index ')
        ->with ('info ','Account created, Welcome '.$request -> input ('name'));
    }
}
