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

        \Session::flash('flash_message', 'New Hotel registered successfully!');

    	return redirect('/');
    }

    public function getHotelOrders($id) {
        $orders = \App\Order::where('hotel_id', $id)->get();

        $orders_pending = [];
        $orders_delivered = [];
        $orders_cancelled = [];

        foreach ($orders as $order) {
            if ($order->status == 'pending') {
                $orders_pending[] = $order;
            }
            else if ($order->status == 'delivered') {
                $orders_delivered[] = $order;
            }
            else {
                $orders_cancelled[] = $order;
            }
        }

        $hotel_name = \App\Hotel::find($id)->name;

        return view('adminhoteldash')->with('orders', $orders)->with('hotel_name', $hotel_name);
    }

    public function getOrderConfirm($id) {
        if (\Auth::user()->is_admin == false) {
            return redirect('/');
        }

        else {

            $order = \App\Order::find($id);

            if ($order == null) {
                return redirect()->back();
            }

            $order->status = 'delivered';

            $order->save();

            return redirect()->back();
        }
        
    }
}
