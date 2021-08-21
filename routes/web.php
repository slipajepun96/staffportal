<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarRequestController;


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


Route::get('/email/welcome', function () {
    return new App\Mail\CarRequestEmail();
    });


//middleware->auth
Route::group(['middleware'=>['auth']],function()
{
    //dashboard
    Route::view('/dashboard','dashboard')->name('dashboard');



    //configuration
    Route::get('/configuration/update-profile',[UserController::class,'update'])->name('update-profile');

    //car
        //car-listing
        Route::get('/cars/index',[CarController::class,'index'])->name('cars-index');

        //car-request
        Route::post('/cars/request/request-use',[CarRequestController::class,'store'])->name('cars-request-request-store');
        Route::delete('/cars/request/delete/{id}',[CarRequestController::class,'delete'])->name('car-request-delete');
        Route::get('/cars/request',[CarRequestController::class,'index'])->name('cars-request-index');
        Route::get('/cars/request/request-use',[CarRequestController::class,'request'])->name('cars-request-request-use');
        Route::get('/cars/request/view/{id}',[CarRequestController::class,'view'])->name('car-request-view');
        


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
