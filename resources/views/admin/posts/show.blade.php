@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>Posts: {{$post->id}}</h1>
                <a href="{{route('admin.posts.index') }}"></a>
            </div>
            <dl>
                <dt>Title</dt>
                <dd>{{$post->title}}</dd>
                <dt>Content</dt>
                <dd>{{$post->content}}</dd>
                <dt>Slug</dt>
                <dd>{{$post->slug}}</dd>
            </dl>
            <a href="{{route('admin.posts.edit', $post->slug) }}">Edit</a>
            <a href="{{route('admin.posts.index', $post->slug) }}">Posts</a>
            <a href="{{route('admin.posts.destroy', $post->slug) }}">Delete</a>
        </div>
    </div>
</div>
@endsection
