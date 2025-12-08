<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    InitController,
    UserController,
    PostController,
    PostStatusController,
    ReactionTypeController,
    CommentController,
    ReplyController
};

Route::view('/', 'welcome');

Route::resources([
    'users' => UserController::class,
    'posts' => PostController::class,
    'post-statuses' => PostStatusController::class,
    'reaction-types' => ReactionTypeController::class,
    'comments' => CommentController::class,
    'replies' => ReplyController::class,
]);
 
Route::controller(InitController::class)->prefix('init')->group(
    function () {
        Route::get('models', 'models');
        Route::get('seed', 'seed');
        Route::get('db-fresh', 'dbFresh');
        Route::get('db-fresh-seed', 'dbFreshSeed');
        Route::get('fixes', 'fixes');
    }
);


Route::fallback(fn() => view('404'));
