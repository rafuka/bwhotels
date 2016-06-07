<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    public function getIndex() {
    	$user = \Auth::user();

    	if($user->is_admin) {
    		return view('admindashboard');
    	}
    	else {

    		$hotel = $user->hotel->toArray();
    		$orders = \App\Order::where('hotel_id', $hotel['id'])->orderBy('created_at', 'desc')->get();
    		
    		return view('dashboard')->with('hotel', $hotel)->with('orders', $orders->toArray());
    		
    	}
    	
    	#return view('dashboard')->with('user', $user);
    }

    public function getNewOrder() {
    	return view('neworderform');
    }

    public function postNewOrder() {
    	echo 'hai';
    }
}
