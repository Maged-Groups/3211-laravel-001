<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::all();
        $posts = Post::with(['user', 'postStatus'])->get();
        // $posts = Post::where('user_id', '=', 100)->get();
        // $posts = Post::where('user_id', '=', '100')->get();
        // Shorten the where method if the condition is (=)
        // $posts = Post::where('user_id', '100')->get();
        // $posts = Post::where('user_id', 350)->get();
        // $posts = Post::where('user_id', 350)->where('post_status_id', 4)->get();
        // $posts = Post::where(['user_id' => 350, 'post_status_id' => 4])->get();

        // $posts = Post::where('post_title', 'like', '%ipsum%')->get();
        // $posts = Post::whereAll(['post_title', 'post_body'], 'like', '%ipsum%')->get(); // AND
        // $posts = Post::whereAny(['post_title', 'post_body'], 'like', '%ipsum%')->get(); // OR
        // $posts = Post::all(['post_title', 'id', 'thumbnail']);
        // $posts = Post::get(['post_title', 'id', 'thumbnail']);

        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return $post->load(['user', 'postStatus', 'comments.user']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
