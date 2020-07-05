<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Menu;
use App\Page;

class HomeController extends Controller
{
    public function index() {
        $posts = Post::all();
        $menu = Menu::where('title', 'header-menu')->first();

        $menu_items = [];

        foreach(json_decode($menu->items) as $item) {
            $page = Page::where('id', $item)->first();
            array_push($menu_items, $page);
        }

        return view('home', ['posts' => $posts, 'menu' => $menu_items]);
    }
}
