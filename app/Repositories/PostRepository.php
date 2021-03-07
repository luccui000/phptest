<?php

namespace App\Repositories;

use App\Post;
use App\Repositories\PostRepositoryConstract;

class PostRepository implements PostRepositoryConstract {
    public function all()
    {
        return Post::all();
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