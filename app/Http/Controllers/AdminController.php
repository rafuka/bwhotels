<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function getRegHotel() {
    	$user = \Auth::user();
    	if($user->is_admin == true) {
    		return view('hotelreg');
    	}
    	else {
    		return redirect('/');
    	}
    }

    public function postRegHotel(Request $request) {
    	
    	$this->validate($request, [
    		'username' => 'required|min:5|unique:users',
    		'email' => 'required|email',
    		'tlf'   => 'required|numeric',
    		'password' => 'required|min:7',
    		'password_confirmation' => 'required|confirmed',
    		'name'	=> 'required|min:5',
    		'address' => 'required|min:8',
    		'hab_num' => 'required|numeric',
    		'stars'   => 'required|numeric',
       	]);
    	
    	dd($request);
    }
}
