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

    /*
    \App\Models\Address::create([
        'user_id' => 1,
        'country' => 'Bangladesh'
    ]);

    \App\Models\Address::create([
        'user_id' => 2,
        'country' => 'Pakistan'
    ]);

    \App\Models\Address::create([
        'user_id' => 2,
        'country' => 'Tarki'
    ]);
    */

    /*
    ////create another way
    
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

    // $user = \App\Models\User::with('addresses')->get();

    // dd($user);


    /*eger loding*/
    //$addresses = \App\Models\Address::all();
    /*
    $addresses = \App\Models\Address::with('user')->get();
    return view('user.index',['address' => $addresses]);
    */


    //$users = \App\Models\User::with('addresses')->get();
    // $users[0]->addresses()->create([
    //     'country' => "iran"
    // ]);
    //return view('user.index',['users' => $users]);




    /*
    $users = \App\Models\User::with('posts')->get();
    $users[0]->posts()->create([
        'title' => 'post 4',
    ]);

    $users[0]->posts()->create([
        'title' => 'post 5',
    ]);

    $users[4]->posts()->create([
        'title' => 'post 6',
    ]);
    */
    
    
    
    
    /*
    //if user has post              has('relation function name')
    
    $users = \App\Models\User::has('posts')->with('posts')->get();
    return view('user.index',['users' => $users]);
    */
    
    
    
    
    /*
    //if user has "2 or mode post"              has('relation_function_name', '>=', 2)
    
    $users = \App\Models\User::has('posts', '>=', 2)->with('posts')->get();
    return view('user.index',['users' => $users]);
    */




    /*
    //where post find post title like %title% 
    
    whereHas('posts', function($query){
        $query->where('title','like','%title');
    })->with('post')->get('posts')
    
    $users = \App\Models\User::whereHas('posts', function($query){
        $query->where('title', 'like', '%title%');
    })->with('posts')->get();
    return view('user.index',['users' => $users]);
    */



    //find user where user have no post           doesntHave('posts')
    $users = \App\Models\User::doesntHave('posts')->with('posts')->get();
    return view('user.index',['users' => $users]);

});

Route::get('/posts',function(){
    //===============One to many

    /*
    \App\Models\Post::create([
        'user_id' => 1,
        'title' => "Post title One"
    ]);
    
    \App\Models\Post::create([
        'user_id' => 2,
        'title' => "Post title two"
    ]);

    */
    // \App\Models\Post::create([
    //     'title' => "Post title two"
    // ]);
    $posts = \App\Models\Post::all();

    //return view('post.index',compact($posts));
    return view('post.index',['posts'=>$posts]);
});
