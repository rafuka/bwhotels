<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    public function getIndex() {
    	$user = \Auth::user();

    	if($user->is_admin) {

    		$hotels = \App\Hotel::all();

            

            #TODO: get number of orders for each hotel and number of pending orders for each hotel
            #      and pass them to admindashboard view.

    		return view('admindashboard')->with('hotels', $hotels);
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

    public function postNewOrder(Request $request) {
    	
    	$this->validate($request, [
    		'client_name' => 'required',
    		'id_num' 	  => 'required',
    		'contact'	  => 'required',
    		'lug_num'	  => 'required',
    		'terminal'    => 'required',
    		'time'		  => 'required',

    	]);
    	
    	$order = new \App\Order;

    	$order->client_name = $request->input('client_name');
    	$order->id_num = $request->input('id_num');
    	$order->contact = $request->input('contact');
    	$order->lug_num = $request->input('lug_num');
    	$order->terminal = $request->input('terminal');
    	$order->time = $request->input('time');
    	$order->hotel()->associate(\Auth::user()->hotel);
    	

    	$order->save();

    	\Session::flash('flash_message', 'New Order placed successfully!');

    	return redirect('/');
    }
}
