@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{route('admin.posts.index')}}"><button>Posts</button></a>
            <form action="{{route('admin.posts.update', ['post' => $post->slug])}}" method="POST" enctype="multipart/form-data">
            <h1>Modify {{ $post->title }}</h1>
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Title</label>
                <input name="title" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Content</label>
                <input name="content" type="text" class="form-control mb-3 h-content">
            </div>
            <button type="submit">Submit</button>
            </form>
            
        </div>
        
    </div>
</div>
@endsection

<style>
    .h-content {
        height: 200px;
    }
</style>
