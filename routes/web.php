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
Route::get('/about', function () {
    return "lololololololololo";

 
});
Route::get('/contacts', function () {
    return "This is the Contact Page";


 
});

route::get('/post/{id}/{name}', function ($id, $name){
   return "this is post number ". $id ." ". $name;


});

route::get('admin/posts/example', array('as'=>'admin.home' ,function(){
       $url = route('admin.home');

            return "Hello there ". $url;

}));

route::get('/post/{id}','\App\Http\Controllers\PostsController@index');

route::resource('posts', '\App\Http\Controllers\PostsController');

route::resource('/contact', '\App\Http\Controllers\PostsController');


