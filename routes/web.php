<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\CarController;


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
    return view('index');
});
Route::view('/password-reset','auth.forgot-password')->name('password-reset');


//middleware->auth
Route::group(['middleware'=>['auth']],function()
{
    //dashboard
    Route::view('/dashboard','dashboard')->name('dashboard');



    //configuration
    Route::get('/configuration/update-profile',[UserController::class,'update'])->name('update-profile');

    //car
    Route::get('/cars/index',[CarController::class,'index'])->name('cars-index');



});

Route::group(['middleware'=>['auth','hradmin']],function()
{
    //dashboard
    
    //configuration
    
    //car

        //car-listing
        Route::get('/cars/add',[CarController::class,'add'])->name('cars-add');
        Route::get('/cars/{id}',[CarController::class,'view'])->name('cars-view');
        Route::get('/cars/edit/{id}',[CarController::class,'edit'])->name('cars-edit');
        Route::post('/cars/edit/{id}',[CarController::class,'update'])->name('cars-update');
        Route::get('/cars/deactivate/{id}',[CarController::class,'deactivate'])->name('cars-deactivate');
        Route::post('/cars/store',[CarController::class,'store'])->name('cars-store');

        //car-usage
    

});
