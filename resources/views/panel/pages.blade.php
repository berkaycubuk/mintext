@extends('panel.main')

@section('title', 'Pages')

@section('content')
    <h2>Pages</h2>
        <table>
            <tr>
                <th>Title</th>
                <th>Slug
                </th>
                <th>Created At</th>
            </tr>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->slug }}</td>
                <td>{{ $post->created_at }}</td>
            </tr>
            @endforeach
        </table>
@endsection
