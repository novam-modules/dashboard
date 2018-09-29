<?php

foreach(['my', 'admin'] as $prefix){

    Route::group([
        'prefix'        => $prefix,
        'middleware'    => ['web', 'Admin'],
        'namespace'     => 'Admin\Dashboard\Http\Controllers'],

        function(){
            Route::resource('dashboard', DashboardController::class);
        });
}
