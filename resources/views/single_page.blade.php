@extends('layouts.main')

@section('title', $page->title)

@section('content')
    <h2 class="main-title">{{ $page->title }}</h2>
    <div class="post">
        <p class="post-description">{{ $page->description }}</p>
    </div>
@endsection
