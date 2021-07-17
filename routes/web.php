<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

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

Route::get('/signup', function () {
    return view('authentication.signup');
});
Route::get('/login', function () {
    return view('authentication.login');
});
Route::group(['middleware' => 'access'], function () {
    Route::get('/', function () {
        return view('dashboard.dashboard');
    });
    Route::get('/edit', function () {
        return view('dashboard.edit');
    });
    Route::get('/quiz',function (){
        return view('dashboard.quiz');
    });
});
Route::post('/user/add', [UserController::class, 'add']);
Route::post('/user/auth', [UserController::class, 'auth']);
Route::post('/user/edit', [UserController::class, 'edit']);
Route::get('/logout',[UserController::class, 'logout']);
