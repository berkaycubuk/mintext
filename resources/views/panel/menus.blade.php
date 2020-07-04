@extends('panel.main')

@section('title', 'Menus')

@section('content')
    <h2>Menu</h2>
        <a href="/panel/menu/new">New menu</a>
        <table>
            <tr>
                <th>Title</th>
            </tr>
            @foreach($menus as $menu)
            <tr>
                <td>{{ $menu->title }}</td>
            </tr>
            @endforeach
        </table>
@endsection
