@extends('panel.main')

@section('title', 'Menus')

@section('content')
    <h2>Menu</h2>
        <a class="button" href="/panel/menu/new">New menu</a>
        <table class="table">
            <tr>
                <th>Title</th>
                <th>Options</th>
            </tr>
            @foreach($menus as $menu)
            <tr>
                <td>{{ $menu->title }}</td>
                <td><a href="/panel/menu/edit/{{ $menu->id }}">Edit</a><a href="/panel/menu/delete/{{ $menu->id }}">Delete</a></td>
            </tr>
            @endforeach
        </table>
@endsection
