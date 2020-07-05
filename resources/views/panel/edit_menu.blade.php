@extends('panel.main')

@section('title', 'Edit Menu')

@section('content')
    <h2>Edit Menu</h2>
    <form class="form" class="form" action="/panel/menu/edit" method="post">
        @csrf
        <input style="display:none;" type="text" name="id" value="{{ $menu->id }}">
        <input class="form-input" type="text" name="title" placeholder="Title" value="{{ $menu->title }}">
        <!-- Get items slug with ids -->
        <input class="form-input" type="text" name="items" placeholder="Items" value="{{ implode(', ', json_decode($menu->items)) }}">
        <button class="form-button" type="submit">Update</button>
    </form>
@endsection
