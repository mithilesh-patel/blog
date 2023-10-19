<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

// Route::get('/', function () {
//     // return view('welcome');
//     return redirect('home');
// });

Route::redirect('/', 'home');

// Route::get('/aboutus', function () {
//     return view('aboutus');
// });

// Shorthand for Route view

Route::view('/home', 'home');
Route::get('/aboutus/{param}', function ($param) {
    return view('aboutus', ['param'=>$param]);
});
Route::view('/contactus', 'contactus');
Route::get('/user/{name}', [UserController::class, 'show']);