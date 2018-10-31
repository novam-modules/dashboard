<?php

foreach(user_routes() as $prefix){

    Route::prefix($prefix)->group(function() {
        Route::resource('dashboard', DashboardController::class);
    });
}
