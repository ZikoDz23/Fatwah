<?php

use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FacebookController;

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

Route::get("/", [UserController::class,'ShowHomePage']);

Route::get('/singup', function(){
    return view('register');
});

Route::Post('/singup',[UserController::class,'register']);
Route::post('/', [UserController::class, 'login']);
Route::get('/dashbord', function(){
    return view('dashbord');
})->name('index');
Route::get('/logout',[Usercontroller::class, 'logout']);

//payment related routes
Route::post('/checkout',[StripeController::class, 'checkout' ])->name('checkout');
Route::get('/success', [StripeController::class, 'success'])->name('success');


Route::get('/auth/facebook', [FacebookController::class, 'fblogin']);
Route::get('/auth/facebook/callback', [FacebookController::class, '']);