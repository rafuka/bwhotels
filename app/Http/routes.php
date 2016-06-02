<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Hotel;

Route::get('/ex1', function() {
        $orders = \App\Order::with('hotel')->get();
        foreach($orders as $order) {
            dump($order->hotel->name);
        }
        
    });

Route::get('/ex2', function() {
        $hotel = new Hotel();

        dd($hotel);
        
    });


Route::get('/ex3', function() {
    $user = new \App\User;
    $user->username = 'bawlz';
    $user->email = 'bawlz@offire.com';
    $user->password = bcrypt('123456');
    $user->tlf = '2843975435';

    $user->save();

    $hotel = new \App\Hotel;
    $hotel->name = 'Hotelejo';
    $hotel->address = 'Calle tus nalgas nro 67';
    $hotel->hab_num = 82;
    $hotel->stars = 3;
    $hotel->user()->associate($user);
    // $hotel->user_id = $user->id; 
});


# -----------------------------------
# Authentication
# -----------------------------------

Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');

# Route::get('/register', 'Auth\AuthController@getRegister');
# Route::post('/register', 'Auth\AuthController@postRegister');

Route::get('/logout', 'Auth\AuthController@logout');


# -----------------------------------
# Main Routes
# -----------------------------------

Route::group(['middleware' => 'auth'], function() {
   
    Route::get('/', 'MainController@getIndex');

    Route::get('/register', 'AdminController@getRegHotel');
    Route::post('/register', 'AdminController@postRegHotel');
    
});


# ------------------------------------
# Test Routes
# ------------------------------------

if (App::environment('local')) {

Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});

    Route::get('/loginstatus', function () {
        $user = Auth::user();

        if($user) {
            echo 'You are logged in. <br>';
            if($user->is_admin == true) {
                echo 'You are Admin';
            }
            else {
                echo 'You are not admin.';
            }
            dump($user->toArray());
        }
        else {
            echo 'You are not logged in.';
        }

        $users = \App\User::all()->toArray();
        dump($users);
    });

}


