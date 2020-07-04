<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Page;

class PanelController extends Controller
{
    public function index() {
        if(session('token') != null) {
            return view('panel/home');
        } else {
            return redirect()->route('home');
        }
    }

    public function pages() {
        if(session('token') != null) {
            $pages = Page::all();
            return view('panel/pages', [
                'pages' => $pages
            ]);
        } else {
            return redirect()->route('home');
        }
    }

    public function newPage() {
        if(session('token') != null) {
            return view('panel/new_page');
        } else {
            return redirect()->route('home');
        }
    }

    public function posts() {
        if(session('token') != null) {
            $posts = Post::all();
            return view('panel/posts', [
                'posts' => $posts
            ]);
        } else {
            return redirect()->route('home');
        }
    }

    public function newPost() {
        if(session('token') != null) {
            return view('panel/new_post');
        } else {
            return redirect()->route('home');
        }
    }

    public function login() {
        if(session('token') != null) {
            return redirect()->route('panel.index');
        } else {
            return view('login');
        }
    }

    public function loginRequest() {
        $user = User::where([
            ['username', '=', request('username')],
            ['password', '=', request('password')]
        ])->first();

        if($user) {
            session(['token' => $user->id]);
            return redirect('/login')->with('message', 'Welcome!');
        } else {
            session(['token' => null]);
            return redirect('/login')->with('message', 'Wrong username or password!');
        }
    }

    public function logout() {
        if(session('token') != null) {
            session(['token' => null]);
        }

        return redirect()->route('home');
    }
}
