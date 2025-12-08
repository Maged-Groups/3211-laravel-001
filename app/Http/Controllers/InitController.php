<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class InitController extends Controller
{
    function models()
    {
        $models = [
            'User',
            'PostStatus',
            'ReactionType',
            'Post',
            'Comment',
            'Reply',
            'Reaction'
        ];
        foreach ($models as $model) {
            // php artisan make:model Post -a
            Artisan::call('make:model', ['name' => $model, '-a' => true]);
            sleep(1);
        }
    }

    function seed()
    {
        Artisan::call('db:seed');
    }

    function dbFresh()
    {
        Artisan::call('migrate:fresh');
    }

    function dbFreshSeed()
    {
        Artisan::call('migrate:fresh', ['--seed' => true]);
    }

    function fixes () {
        // Fix posts table (post_title)
        // loop all posts and change post title with a fake text from faker class
        // $posts = Post::all();

        // foreach($posts as $post){
        //     $title = fake()->text(50);
        //     $post->post_title = $title;
        //     $post->save();
        // }
    }
}
