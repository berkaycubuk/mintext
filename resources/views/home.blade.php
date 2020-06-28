@extends('layouts.main')

@section('title', 'Homepage')

@section('content')
    <h2 class="main-title">Home</h2>
    <div class="posts">
        <a class="post">
            <h2 class="post-title">Post Title 1</h2>
            <p class="post-excerpt">Post excerpt</p>
        </a>
        <a class="post">
            <h2 class="post-title">Post Title 2</h2>
            <p class="post-excerpt">Post excerpt</p>
        </a>
        <a class="post">
            <h2 class="post-title">Post Title 3</h2>
            <p class="post-excerpt">Post excerpt</p>
        </a>
        <a class="post">
            <h2 class="post-title">Post Title 4</h2>
            <p class="post-excerpt">Post excerpt</p>
        </a>
    </div>
@endsection
