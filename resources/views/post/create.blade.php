@extends('base')

@section('title', 'Create A New Post')

@section('content')
    <div class="container">
        <form action="{{ route('post.store') }}" method="POST">
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" placeholder="Title" name="title">
            </div>
            <div class="mb-3">
                <label class="form-label">Content</label>
                <textarea class="form-control" rows="3" name="content"></textarea>
            </div>
            @csrf
            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection
