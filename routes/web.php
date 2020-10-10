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
// Route::get('customer/index', function () {
//     return view('admin/customer.index');
// });

Route::resource('customer', CustomerController::class);
// Route::get('customer/add', 'CustomerController@add');
// Route::get('photo/index', 'PhotoController@a');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('auth/dashboard');
})->name('dashboard');


Route::group(['as'=>'admin.','prefix'=>'/admin','middleware' => ['auth:sanctum', 'verified']], function () {
    // Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    // Route::get('logout', 'AdminController@logout')->name('logout');

Route::any('customer/add', 'CustomerController@add')->name('add');
Route::any('customer/manage', 'CustomerController@manage')->name('manage');
Route::any('customer/transaction', 'CustomerController@transaction')->name('transaction');
Route::any('customer/payment', 'CustomerController@payment')->name('payment');
    // Route ::get('/test', function(){
    //     return view('auth/dashboard');
    // });

   
});
