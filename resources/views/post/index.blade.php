@extends('base')

@section('title', 'List All Post')

@section('content')
    <div class="container mt-3">
        <ul class="list-group list-group-flush">
            @forelse($posts->chunk(10)[1] as $item) 
                <li class="list-group-item">
                    {{ $item->title }}
                    <a href="{{ route('post.edit', ['id' => $item->id]) }}" 
                        class="btn btn-success btn-sm float-end">Edit</a>
                    <a href="{{ route('post.delete', ['id' => $item->id]) }}" 
                        class="btn btn-danger btn-sm float-end text-white">Delete</a>
                </li> 
            @empty
                <li>No Items</li> 
            @endforelse
        </ul>
    </div>
@endsection
