<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PanelController extends Controller
{
    public function index() {
        if(session('token') != null) {
            return view('panel/home');
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
}
