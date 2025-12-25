<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\{
    UserController,
    PostController,
    PostStatusController,
    ReactionTypeController,
    CommentController,
    ReplyController
};

// Protected Routes
Route::middleware(['auth:sanctum'])->group(function () {

    Route::resources([
        'users' => UserController::class,
        'posts' => PostController::class,
        'post-statuses' => PostStatusController::class,
        'reaction-types' => ReactionTypeController::class,
        'comments' => CommentController::class,
        'replies' => ReplyController::class,
    ]);

    Route::controller(AuthController::class)->prefix('auth')->group(function () {
        Route::post('change-password', 'change_password');
        Route::get('active-sessions', 'active_sessions');
        Route::get('logout-current', 'logout_current');
        Route::get('logout-all', 'logout_all');
        Route::get('logout-others', 'logout_others');
    });

});


// Unprotected Routes
Route::controller(AuthController::class)->prefix('auth')->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('forget-password', 'forget_password');
    Route::post('reset-password', 'reset_password');
});