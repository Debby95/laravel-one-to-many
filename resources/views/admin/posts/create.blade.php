@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{route('admin.posts.index')}}"><button>Create</button></a>
            <form action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Title</label>
                <input name="title" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Content</label>
                <input name="content" type="text" class="form-control mb-3">
            </div>
            <div class="form-group">
                <label>Cateogory</label>
                <select name="category_id" type="text" class="form-control mb-3">
                    <option value=""></option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
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
