@extends('panel.main')

@section('title', 'New Post')

@section('content')
    <h2>New Post</h2>
    <form class="form" action="" method="post">
        <input class="form-input" type="text" name="title" placeholder="Title">
        <input class="form-input" type="text" name="slug" placeholder="Slug">
        <textarea class="form-textarea" name="description" placeholder="Description"></textarea>
        <input class="form-input" type="text" name="tags" placeholder="Tags">
        <button class="form-button" type="submit">Publish</button>
    </form>
@endsection
