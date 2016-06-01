<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    public function getIndex() {
    	$user = \Auth::user()->toArray();

    	
    	return view('dashboard')->with('user', $user);
    }
}
