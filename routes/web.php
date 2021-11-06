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



    /*
    //find user where user have no post           doesntHave('posts')
    $users = \App\Models\User::doesntHave('posts')->with('posts')->get();
    return view('user.index',['users' => $users]);
    */


    $users = \App\Models\User::with('posts','addresses')->get();
    return view('user.index',['users' => $users]);

});

Route::get('/posts',function(){
    /*
    $posts = \App\Models\Post::all();
    return view('post.index',['posts'=>$posts]);
    */

    //====================manay to many
    // $posts = \App\Models\Post::with('tags')->get();
    // dd($posts);

    //$post = \App\Models\Post::first();
    //remove numer one tag
    //$post->tags()->detach([1]);

    //remove all tage
    //$post->tags()->detach();

    //$post->tags()->attach([2,3,4]);

    //remove all tag and add 2 and 4 tag
    //$post->tags()->sync([1,3]);


    
    $posts = \App\Models\Post::with('user','tags')->get();
    return view('post.index',compact('posts'));
});

Route::get('/tags', function(){
    $tags = \App\Models\Tag::with('posts')->get();
    return view('tag.index', compact('tags'));
});

Route::get('attach_detach_event_handle',function(){
    $post = \App\Models\Post::first();
    // $post->tags()->attach([
    //     2 => [
    //         'status' => 'approved'
    //     ]
    // ]);

    // $post->tags()->detach([
    //     2 => [
    //         'status' => 'approved'
    //     ]
    // ]);
    
    $post->tags()->sync([
        2 => [
            'status' => 'approved'
        ]
    ]);
});

Route::get('/projects',function(){
    $projects = \App\Models\Project::find(1);
    //return $projects->task;
    dd($projects->tasks);
});
