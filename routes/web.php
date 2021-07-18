<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\UserController;


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
    


});


//middleware->hradmin
//Route::middleware('')


//register
// Route::get('/register', [RegisterController::class,'index']);
// Route::post('/register', [RegisterController::class,'store'])->name('register-store');