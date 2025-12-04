<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class InitController extends Controller
{
    function models()
    {
        // php artisan make:model Post -a
        Artisan::call('make:model', ['name' => 'Post', '-a' => true]);
    }
}
