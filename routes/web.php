<?php

use App\Http\Controllers\Firebase\AccountController;
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
//     return view('welcome');
// });

Route::controller(AccountController::class)
->group(function(){
    Route::get('/','index');
    Route::get('add-account','addAccountpage');
    Route::post('add-account','storeData');
    Route::get('/edit-account/{id}','editPage'); 
    Route::put('/update-account/{id}','update');
});
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
