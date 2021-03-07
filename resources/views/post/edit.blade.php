@extends('base')

@section('title', 'Update Post')

@section('content')
    <div class="container">
        <form action="{{ route('post.store') }}" method="POST">
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" value="{{ $post->title }}" name="title">
            </div>
            <div class="mb-3">
                <label class="form-label">Content</label>
                <textarea class="form-control" rows="3" name="content">
                    {{ $post->content }}
                </textarea>
            </div>
            @csrf
            <input type="submit" class="btn btn-primary" value="Update">
        </form>
    </div>
@endsection
