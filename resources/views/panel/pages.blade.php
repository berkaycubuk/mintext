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
            </tr>
            @foreach($pages as $page)
            <tr>
                <td>{{ $page->title }}</td>
                <td>{{ $page->slug }}</td>
                <td>{{ $page->created_at }}</td>
            </tr>
            @endforeach
        </table>
@endsection
