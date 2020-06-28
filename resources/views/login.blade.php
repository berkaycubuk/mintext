@extends('layouts.main')

@section('title', 'Homepage')

@section('content')
    <form action="" method="post" class="login">
        @csrf
        <h2 class="login-title">Login</h2>
        <input name="username" type="text" placeholder="Username" class="login-input">
        <input name="password" type="password" placeholder="Password" class="login-input">
        <button type="submit" class="login-button">Login</button>
        {{ session('message') }}
    </form>
@endsection
