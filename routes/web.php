<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\productcontroller;
use Illuminate\Contracts\Session\Session;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/logout', function () {
    Session()->forget('user');
    return view('login');
});

Route::post('/login','Usercontroller@login');
Route::post('/register','Usercontroller@register');
Route::get("/",'Productcontroller@index');
Route::get('detail/{id}','Productcontroller@detail');
Route::get('search','Productcontroller@search');
Route::post('addtocart','Productcontroller@addTocart');
Route::get('cartlist','Productcontroller@cartlist');
Route::get('ordernow','Productcontroller@ordernow');
Route::get('removecart/{id}','Productcontroller@removecart');
Route::post('orderplaced','Productcontroller@orderplaced');
Route::get('myorder','Productcontroller@myorder');




