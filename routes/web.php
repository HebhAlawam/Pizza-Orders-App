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


//auth route
Auth::routes();

Route::get('/', [App\Http\Controllers\FrontpageController::class, 'index'])->name('frontpage');

//order section for user
Route::resource('orders',App\Http\Controllers\FrontpageController::class);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//pizza route admin
//Route::group(['prefix' => 'admin','middleware' => ['auth' , 'admin']], function(){
Route::group(['middleware' => ['auth']], function(){
    Route::resource('pizzaapp',App\Http\Controllers\PizzaController::class);

    //order section for admin
    Route::resource('order',App\Http\Controllers\UserOrderController::class);

    //status
    Route::get('user/order/status{id}', [App\Http\Controllers\UserOrderController::class, 'status'])->name('order.status');
    //all costumor
    Route::get('customer', [App\Http\Controllers\UserController::class, 'customer'])->name('customer');
    //role
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    //all users
    Route::resource('users', App\Http\Controllers\UserController::class);

}); 












