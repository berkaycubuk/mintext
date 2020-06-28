<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() {
        return redirect('/');
    }

    public function getAll() {
        $posts = Post::all();
        return view('home', [
            'posts' => $posts
        ]);
    }

    public function get($slug) {
        $post = Post::where('slug', $slug)->first();

        return view('single_post', ['post' => $post]);
    }
}
