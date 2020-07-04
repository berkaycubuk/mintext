@extends('panel.main')

@section('title', 'New Menu')

@section('content')
    <h2>New Menu</h2>
    <form class="form" class="form" action="" method="post">
        <input class="form-input" type="text" name="title" placeholder="Title">
        <button class="form-button" type="submit">Publish</button>
    </form>
@endsection
