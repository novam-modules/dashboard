<?php

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

Route::group([
    'prefix' => user_route('admin'), 'middleware' => ['web', 'admin']
], function() {
    Route::resource('dashboard', DashboardController::class);
});

foreach(user_routes() as $prefix){

    Route::group([
    'prefix' => $prefix, 'middleware' => ['web', 'admin']
    ], function() {
        Route::resource('dashboard', DashboardController::class);
    });

}
