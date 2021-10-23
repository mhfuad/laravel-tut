<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('user',function(){
   //\App\Models\User::factory()->count(3)->create();

//    \App\Models\Address::create([
//        'user_id' => 1,
//        'country' => 'Bangladesh'
//    ]);
//
//    \App\Models\Address::create([
//        'user_id' => 2,
//        'country' => 'Pakistan'
//    ]);
//
//    \App\Models\Address::create([
//        'user_id' => 2,
//        'country' => 'Tarki'
//    ]);

    ////create another way
    /*
    $user = App\Models\User::factory()->create();
    $user->address()->create([
        'country' => 'arab'
    ]);
    */



    /*
    one to many revarce belongs to
    $users = \App\Models\User::all();
    return view('user.index',["users" => $users]);
    */



/*  save data with egar associate method
    $user = App\Models\User::factory()->create();
    $address = new \App\Models\Address(['country' => 'UK']);
    $address->user()->associate($user);
    $address->save();
*/


    /*eger loding*/
    //$addresses = \App\Models\Address::all();
    $addresses = \App\Models\Address::with('user')->get();
    return view('user.index',['address' => $addresses]);


});
