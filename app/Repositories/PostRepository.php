<?php

namespace App\Repositories;

use App\Post;
use App\Repositories\PostRepositoryConstract;
use Illuminate\Pipeline\Pipeline;

class PostRepository implements PostRepositoryConstract {
    public function all()
    {
        return app(Pipeline::class)
                ->send(Post::query())
                ->through([
                    \App\QueryFilters\Active::class,
                    \App\QueryFilters\Limit::class,
                    \App\QueryFilters\Sort::class,
                ])
                ->thenReturn()
                ->paginate(Post::PAGINATE);
    }
    public function find($id)
    {
        return Post::findOrFail($id);
    }
    public function create($data)
    {

    }
    public function delete($id)
    {

    }
    public function update($id, array $data)
    {

    }
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return array('post' => $post->toArray(), 'image' => $post->images()->get()->toArray());
    } 
}