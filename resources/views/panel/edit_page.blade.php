@extends('panel.main')

@section('title', 'Edit Page')

@section('content')
    <h2>Edit Page</h2>
    <form class="form" class="form" action="/panel/page/edit" method="post">
        @csrf
        <input style="display:none;" type="text" name="id" value="{{ $page->id }}">
        <input class="form-input" type="text" name="title" placeholder="Title" value="{{ $page->title }}">
        <input class="form-input" type="text" name="slug" placeholder="Slug" value="{{ $page->slug }}">
        <textarea class="form-textarea" name="description" placeholder="Description">{{ $page->description }}</textarea>
        <button class="form-button" type="submit">Update</button>
    </form>
@endsection
