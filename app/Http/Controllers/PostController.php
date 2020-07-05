<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Page;

class PostController extends Controller
{
    public function index() {
        return redirect('/');
    }

    public function slug($slug) {
        $post = Post::where('slug', $slug)->first();

        if(!$post) {
            $page = Page::where('slug', $slug)->first();

            if(!$page) {
                return redirect('/404');
            } else {
                return view('single_page', ['page' => $page]);
            }
        } else {
            return view('single_post', ['post' => $post]);
        }
    }

    public function getAll() {
        $posts = Post::all();
    }

    public function get($slug) {
        $post = Post::where('slug', $slug)->first();

        return view('single_post', ['post' => $post]);
    }
}
