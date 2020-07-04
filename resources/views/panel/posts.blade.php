@extends('panel.main')

@section('title', 'Posts')

@section('content')
    <h2>Posts</h2>
        <a href="/panel/post/new">New post</a>
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
