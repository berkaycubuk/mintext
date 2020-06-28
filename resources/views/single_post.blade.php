@extends('layouts.main')

@section('title', 'Homepage')

@section('content')
    <h2 class="main-title">{{ $post->title }}</h2>
    <div class="post">
        <p class="post-description">{{ $post->description }}</p>
    </div>
@endsection
