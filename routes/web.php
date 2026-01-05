<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    InitController,
};

Route::view('/', 'welcome');

Route::controller(InitController::class)->prefix('init')->group(
    function () {
        Route::get('models', 'models');
        Route::get('seed', 'seed');
        Route::get('db-fresh', 'dbFresh');
        Route::get('db-fresh-seed', 'dbFreshSeed');
        Route::get('fixes', 'fixes');
        Route::get('resources', 'resources');
    }
);

Route::fallback(fn() => view('404'));
