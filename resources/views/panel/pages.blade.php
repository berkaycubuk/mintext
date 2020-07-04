@extends('panel.main')

@section('title', 'Pages')

@section('content')
    <h2>Pages</h2>
        <a href="/panel/page/new">New page</a>
        <table>
            <tr>
                <th>Title</th>
                <th>Slug
                </th>
                <th>Created At</th>
                <th>Options</th>
            </tr>
            @foreach($pages as $page)
            <tr>
                <td>{{ $page->title }}</td>
                <td>{{ $page->slug }}</td>
                <td>{{ $page->created_at }}</td>
                <td><a href="/panel/page/edit/{{ $page->id }}">Edit</a><a href="/panel/page/delete/{{ $page->id }}">Delete</a></td>
            </tr>
            @endforeach
        </table>
@endsection
