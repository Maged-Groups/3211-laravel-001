<?php

use App\Mail\NotifyCommentMail;
use Illuminate\Support\Facades\Mail;
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

Route::get('test-email', function () {
    Mail::to('magedyaseengroups@gmail.com')->send(new NotifyCommentMail());
});


Route::fallback(fn() => view('404'));
