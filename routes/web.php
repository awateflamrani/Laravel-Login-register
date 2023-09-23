<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\UserAuth;
use Illuminate\Support\Facades\Auth;
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
    return view('users.index');
});
Route::resource('users',Controller::class);
Route::resource('articles',ArticleController::class);
Route::post("users",[Controller::class,'userLogin']);
Route::view("login",'login');
Route::view("users",'users.show');
Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth');

Route::view("profile",'profile');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('user/profile/page','profile')->middleware('auth')->name('user/profile/page');


Route::get('/force-logout', function () {
    Auth::logout(); // Logs out the currently authenticated user
    return redirect('/');
});
