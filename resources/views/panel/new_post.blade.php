@extends('panel.main')

@section('title', 'New Post')

@section('content')
    <h2>New Post</h2>
    <form class="form" action="/panel/post/new" method="post">
        @csrf
        <input class="form-input" type="text" name="title" placeholder="Title">
        <input class="form-input" type="text" name="slug" placeholder="Slug">
        <textarea class="form-textarea" name="description" placeholder="Description"></textarea>
        <textarea class="form-textarea" name="excerpt" placeholder="Excerpt"></textarea>
        <input class="form-input" type="text" name="tags" placeholder="Tags">
        <button class="form-button" type="submit">Publish</button>
    </form>
@endsection
