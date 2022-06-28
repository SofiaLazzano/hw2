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
    return redirect('log_in');  
});

Route::get('registrazione', 'App\Http\Controllers\AccessController@ShowRegistrazione');
Route::post('registrazione', 'App\Http\Controllers\AccessController@AvviaRegistrazione');
Route::get('username/{username}', 'App\Http\Controllers\AccessController@CheckUsername');
Route::post('log_in', 'App\Http\Controllers\LoginController@AvviaLogin');
Route::get('log_in', 'App\Http\Controllers\LoginController@ShowLogin');
Route::get('home', 'App\Http\Controllers\HomeController@ShowHome');
Route::get('logout','App\Http\Controllers\LoginController@Logout');
Route::get('posts', 'App\Http\Controllers\FeedController@Posts');
Route::get('likes/{id}','App\Http\Controllers\LikesController@ShowLikes');
Route::get('dislikes/{id}','App\Http\Controllers\LikesController@ShowDislikes');
Route::get('crea','App\Http\Controllers\CreaController@ShowCrea');
Route::get('crea/search/{value}','App\Http\Controllers\CreaController@SearchS');
Route::get('crea/https://i.scdn.co/image/{img}/{text}','App\Http\Controllers\CreaController@CreatePostS');
Route::get('crea/https://pixabay.com/get/{value}/{text}','App\Http\Controllers\CreaController@CreatePostP');

?>