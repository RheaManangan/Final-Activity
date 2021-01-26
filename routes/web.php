<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

/*

Route::get('/', function () {
    return view('welcome');
});

//home
Route::get('/home', function () {
    return view('home');
});

//about
Route::get('/about', function () {
    return view('about');
});

//contact
Route::get('/contact', function () {
    return view('contact');
});
//login
Route::get('/login', function () {
    return view('login');
});
//login
Route::get('/register', function () {
    return view('register');
});


*/

//main
Route::get('/main', function () {
    return view('main');
});
 //menus
Route::get('/menus', function () {
    return view('menus');
});

//minigrocery
Route::get('/minigrocery', function () {
    return view('minigrocery');
});
 //menus
Route::get('/reg', function () {
    return view('reg');
});

 //account
Route::get('/account', function () {
    return view('account');
});
//update
Route::get('/update', function () {
    return view('update');
});
//update
Route::get('/inventory', function () {
    return view('inventory');
});
 //bfast
Route::get('/bfast', function () {
    return view('bfast');
});
//dairyandmilk
Route::get('/dairyandmilk', function () {
    return view('dairyandmilk');
});
//frozen
Route::get('/frozen', function () {
    return view('frozen');
});
//cannedf
Route::get('/cannedf', function () {
    return view('cannedf');
});




//Final Activity
 //master

//Route::get('/AHome', function () {
  //  return view('AHome');
//});

Route::get('/index',[HomeController::class,'index']);

Route::get('/generic',[HomeController::class,'generic']);

Route::get('/elements',[HomeController::class,'elements']);

