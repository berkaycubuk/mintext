<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Page;
use App\Menu;

class PanelController extends Controller
{
    public function index() {
        if(session('token') != null) {
            return view('panel/home');
        } else {
            return redirect('/404');
        }
    }

    public function pages() {
        if(session('token') != null) {
            $pages = Page::all();
            return view('panel/pages', [
                'pages' => $pages
            ]);
        } else {
            return redirect('/404');
        }
    }

    public function newPage() {
        if(session('token') != null) {
            return view('panel/new_page');
        } else {
            return redirect('/404');
        }
    }

    public function savePage() {
        if(session('token') != null) {
            $title = request('title');
            $slug = request('slug');
            $description = request('description');

            if($title && $slug && $description) {
                $page = new Page();

                $page->title = $title;
                $page->slug = $slug;
                $page->description = $description;

                $page->save();

                return redirect()->route('panel.pages');
            }
        } else {
            return redirect('/404');
        }
    }

    public function deletePage($id) {
        if(session('token') != null) {
            $page = Page::where('id', $id)->first();

            $page->delete();

            return redirect()->route('panel.pages');
        } else {
            return redirect('/404');
        }
    }

    public function posts() {
        if(session('token') != null) {
            $posts = Post::all();
            return view('panel/posts', [
                'posts' => $posts
            ]);
        } else {
            return redirect('/404');
        }
    }

    public function newPost() {
        if(session('token') != null) {
            return view('panel/new_post');
        } else {
            return redirect('/404');
        }
    }

    public function savePost() {
        if(session('token') != null) {
            $title = request('title');
            $slug = request('slug');
            $description = request('description');
            $excerpt = request('excerpt');
            // $tags = request('tags');

            if($title && $slug && $description) {
                $post = new Post();

                $post->title = $title;
                $post->slug = $slug;
                $post->excerpt = $excerpt;
                $post->description = $description;
                // $post->tags = $tags;

                $post->save();

                return redirect()->route('panel.posts');
            }
        } else {
            return redirect('/404');
        }
    }

    public function deletePost($id) {
        if(session('token') != null) {
            $post = Post::where('id', $id)->first();

            $post->delete();

            return redirect()->route('panel.posts');
        } else {
            return redirect('/404');
        }
    }

    public function menus() {
        if(session('token') != null) {
            $menus = Menu::all();
            return view('panel/menus', [
                'menus' => $menus
            ]);
        } else {
            return redirect('/404');
        }
    }

    public function newMenu() {
        if(session('token') != null) {
            return view('panel/new_menu');
        } else {
            return redirect('/404');
        }
    }

    public function saveMenu() {
        if(session('token') != null) {
            $title = request('title');

            if($title) {
                $menu = new Menu();

                $menu->title = $title;

                $menu->save();

                return redirect()->route('panel.menus');
            }
        } else {
            return redirect('/404');
        }
    }

    public function deleteMenu($id) {
        if(session('token') != null) {
            $menu = Menu::where('id', $id)->first();

            $menu->delete();

            return redirect()->route('panel.menus');
        } else {
            return redirect('/404');
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
        } else {
            return redirect('/404');
        }

        return redirect()->route('home');
    }
}
