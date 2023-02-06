<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

Route::get('/', [HomeController::class, 'identify']) -> name('identify');
Route::get('/welcome', [HomeController::class, 'welcome']) -> name('welcome');

Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::controller(HomeController::class)->group(function() {

        Route::get('/home', 'admin_or_user') -> name('home');
        Route::get('/delicious/home', 'index') -> name('user-home');
        Route::post('/reverseTable', 'reverseTable') -> name('reverseTable');

    });
});
