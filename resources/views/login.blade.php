@extends('layouts.main')

@section('title', 'Homepage')

@section('content')
    <form action="" method="post" class="login">
        <h2 class="login-title">Login</h2>
        <input type="text" placeholder="Username" class="login-input">
        <input type="text" placeholder="Password" class="login-input">
        <button type="submit" class="login-button">Login</button>
    </form>
@endsection
