@extends('panel.main')

@section('title', 'Menus')

@section('content')
    <h2>Menu</h2>
        <a href="/panel/menu/new">New menu</a>
        <table>
            <tr>
                <th>Title</th>
                <td>Options</td>
            </tr>
            @foreach($menus as $menu)
            <tr>
                <td>{{ $menu->title }}</td>
                <td><a href="/panel/menu/edit/{{ $menu->id }}">Edit</a><a href="/panel/menu/delete/{{ $menu->id }}">Delete</a></td>
            </tr>
            @endforeach
        </table>
@endsection
