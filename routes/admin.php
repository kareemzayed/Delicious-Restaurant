<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::group(['middleware' => ['auth', 'auth_admin']], function() {
    Route::controller(AdminController::class) -> group(function() {

        Route::get('/dashboard', 'index') -> name('dashboard');
        Route::get('/team', 'getTeam') -> name('team');
        Route::get('/add-new-member', 'addMember') -> name('add-new-member');
        Route::post('/addMember', 'completeAddMember') -> name('addMember');
        Route::get('/get-booked-table', 'getBookedTables') -> name('getBookedTables');

    });
});
