@extends('panel.main')

@section('title', 'Posts')

@section('content')
    <h2>Posts</h2>
        <a class="button" href="/panel/post/new">New post</a>
        <table class="table">
            <tr>
                <th>Title</th>
                <th>Slug
                </th>
                <th>Created At</th>
                <th>Options</th>
            </tr>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->slug }}</td>
                <td>{{ $post->created_at }}</td>
                <td><a href="/panel/post/edit/{{ $post->id }}">Edit</a><a href="/panel/post/delete/{{ $post->id }}">Delete</a></td>
            </tr>
            @endforeach
        </table>
@endsection
