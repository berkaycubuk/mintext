@extends('panel.main')

@section('title', 'Edit Post')

@section('content')
    <h2>Edit Post</h2>
    <form class="form" action="/panel/post/edit" method="post">
        @csrf
        <input style="display:none;" type="text" name="id" value="{{ $post->id }}">
        <input class="form-input" type="text" name="title" placeholder="Title" value="{{ $post->title }}">
        <input class="form-input" type="text" name="slug" placeholder="Slug" value="{{ $post->slug }}">
        <textarea class="form-textarea" name="description" placeholder="Description">{{ $post->description }}</textarea>
        <textarea class="form-textarea" name="excerpt" placeholder="Excerpt">{{ $post->excerpt }}</textarea>
        <input class="form-input" type="text" name="tags" placeholder="Tags">
        <button class="form-button" type="submit">Update</button>
    </form>
@endsection
