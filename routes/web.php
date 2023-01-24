<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\CustomAuthController;
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

// Route::get('/', function () {
//     return view('index1');
// });


Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/viewusers', function () {
    return view('admin.view1');
});
Route::get('/admin-index', function () {
    return view('admin.admin-index');
});
Route::get('/index', function () {
    return view('user.index');
});





Route::get('/viewusers',[TestController::class,'view_users']);

Route::get('/index',[TestController::class,'view_profile']);
Route::get('/edit/{id}',[TestController::class,'edit']);
Route::put('/edit/{id}',[TestController::class,'update_users']);
Route::get('/view1/{id}',[TestController::class,'ap1']);
Route::put('/view1/{id}',[TestController::class,'ap1']);
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/signOut', [App\Http\Controllers\HomeController::class, 'signOut'])->name('signOut');
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');


// Route::get('/userlogin', function () {
//   return view('/login');
// });
Route::get('login', [CustomAuthController::class, 'adminlogin']);
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 

Route::post('register', [CustomAuthController::class, 'customRegistration']);
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');