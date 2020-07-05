@extends('panel.main')

@section('title', 'New Menu')

@section('content')
    <h2>New Menu</h2>
    <form class="form" class="form" action="/panel/menu/new" method="post">
        @csrf
        <input class="form-input" type="text" name="title" placeholder="Title">
        <input class="form-input" type="text" name="items" placeholder="Items">
        <button class="form-button" type="submit">Publish</button>
    </form>
@endsection
