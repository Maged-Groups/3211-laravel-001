<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('/services/web', function (){
    // return view('services/web-apps');
    return view('services.web-apps');
});

// Create the following routes with their respective views:
// 1. Route: /contact -> View: contact.blade.php
// 2. Route: /services -> View: services.blade.php
// 3. Route: /portfolio -> View: portfolio.blade.php
// 4. Route: /blog -> View: blog.blade.php
// 5. Route: /faq -> View: faq.blade.php
// 6. Route: /reports/annual -> View: reports/annual.blade.php
// 7. Route: /reports/monthly -> View: reports/monthly.blade.php
