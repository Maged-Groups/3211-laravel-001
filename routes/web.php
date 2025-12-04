<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\ProductController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\CommentController;
// use App\Http\Controllers\ServiceController;
// use App\Http\Controllers\ItemController;
use App\Http\Controllers\{
    InitController,
    ProductController,
    // UserController,
    // CommentController,
    // ServiceController,
    // ItemController,
};

Route::view('/', 'welcome');

Route::view('about', 'about');

Route::view('services/web', 'services.web-apps');

Route::redirect('contact', 'find-us', 301);

Route::view('find-us', 'contact');

Route::view('posts', 'posts.index');

Route::get('posts/{post}', fn($post) => view('posts.view', ['post' => $post]));

// Route::get('products', 'App\Http\Controllers\ProductController@index');
// Route::get('products/{product}', 'App\Http\Controllers\ProductController@show');

// Route::get('products', ['App\Http\Controllers\ProductController', 'index']);
// Route::get('products/{product}', ['App\Http\Controllers\ProductController', 'show']);

// Route::get('products', [App\Http\Controllers\ProductController::class, 'index']);
// Route::get('products/{product}', [App\Http\Controllers\ProductController::class, 'show']);

// Route::get('products', [ProductController::class, 'index']);
// Route::get('products/{product}', [ProductController::class, 'show']);

// Group multiple methods in a single Controller: SYNTAX
// Route::controller(ProductController::class)->group(function () { });
// Route::controller(ProductController::class)->group(function () {
//     Route::get('products', 'index');
//     Route::get('products/{product}', 'show');
// });

// Route::prefix('products')->controller(ProductController::class)->group(function () {
//     Route::get('', 'index');
//     Route::get('{product}', 'show');
// });

// Route::resource('products', ProductController::class);
// Route::resource('users', UserController::class);
// Route::resource('comments', CommentController::class);
// Route::resource('services', ServiceController::class);
// Route::resource('items', ItemController::class);

Route::resources([]);

// Create the following controllers
// 'users' 
// 'comments' 
// 'services' 
// 'items' 

Route::get('init', [InitController::class, 'models']);

Route::fallback(fn() => view('404'));
