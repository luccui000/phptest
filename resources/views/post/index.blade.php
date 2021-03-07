@extends('base')

@section('title', 'List All Post')

@section('content')
    <div class="container mt-3"> 
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tr> 
            <tbody>
                @forelse($posts->chunk(10)[5] as $item) 
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->content }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td><a href="{{ route('post.delete', ['id' => $item->id]) }}" 
                        class="btn btn-danger btn-sm float-end text-white">Delete</a>
                    <a href="{{ route('post.edit', ['id' => $item->id]) }}" 
                        class="btn btn-success btn-sm float-end">Edit</a></td>
                    </tr>
                @empty
                    <li>No Items</li> 
                @endforelse
            </tbody>  
        </table>
    </div>
@endsection
