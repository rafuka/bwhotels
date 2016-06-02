<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function getRegHotel() {
    	$user = \Auth::user();
    	if($user->is_admin == true) {
    		return view('hotelreg')->with('user', $user->toArray());
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
    		'password' => 'required|min:7|confirmed',
    		'password_confirmation' => 'required',
    		'name'	=> 'required|min:5',
    		'address' => 'required|min:8',
    		'hab_num' => 'required|numeric',
    		'stars'   => 'required|numeric',
       	]);


    	// Create new user and associated hotel in database.

       	$user = new \App\User;

       	$user->username = $request->input('username');
    	$user->email = $request->input('email');
    	$user->tlf = $request->input('tlf');
    	$user->password = bcrypt($request->input('password'));
    	
    	$user->save();


    	$hotel = new \App\Hotel;

    	$hotel->name = $request->input('name');
    	$hotel->address = $request->input('address');
    	$hotel->hab_num = $request->input('hab_num');
    	$hotel->stars = $request->input('stars');
    	$hotel->user()->associate($user);

    	$hotel->save();


    	
    	dd($request);
    }
}
