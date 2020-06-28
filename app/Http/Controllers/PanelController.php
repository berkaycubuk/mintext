<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PanelController extends Controller
{
    public function index() {

    }

    public function login() {
        return view('login');
    }

    public function loginRequest() {
        $user = User::where([
            ['username', '=', request('username')],
            ['password', '=', request('password')]
        ])->first();

        if($user) {
            return redirect('/login')->with('message', 'Welcome!');
        } else {
            return redirect('/login')->with('message', 'Wrong username or password!');
        }
    }
}
