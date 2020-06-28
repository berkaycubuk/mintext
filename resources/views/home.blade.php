@extends('layouts.main')

@section('title', 'Homepage')

@section('content')
    <h2 class="main-title">Home</h2>
    <div class="posts">
        @foreach($posts as $post)
            <a class="post" href="/post/{{ $post->slug }}">
                <h2 class="post-title">{{ $post->title }}</h2>
                <p class="post-excerpt">{{ $post->excerpt }}</p>
            </a>
        @endforeach
    </div>
@endsection
