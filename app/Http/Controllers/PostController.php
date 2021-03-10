<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Post;
use App\Repositories\PostRepositoryConstract;
use Illuminate\Http\Request; 
use Datatables;

class PostController extends Controller
{
    protected $post;
    public function __construct(PostRepositoryConstract $postRepositoryConstact)
    {
        $this->post = $postRepositoryConstact;
    }
    public function index()
    { 
        // $posts = $this->post->all();
        // return response()->json(['posts' => $posts ]);
        // $posts = Post::whereDate('updated_at', '2021-03-05')->get()->count;
        $posts = $this->post->all()->toArray();
        // dd();
        $posts = array_chunk($posts, 1000);
 
        // $p = Post::select(['id', 'title', 'created_at', 'updated_at', 'active']);
        // $posts = Datatables::of($p)
        //             ->addColumn('post_url', function($p) {
        //                 return url('post/'. $p->id);
        //             })
        //             ->make(true);
        return response()->json($posts);
        
        // return view('post.index', compact('posts'));
    }
    public  function show($id)
    { 
        $arr = $this->post->show($id);   
 
        return response()->json(['post: ' => $arr['post'], 'image' => $arr['image']]);
    }
    public function create()
    { 
        return view('post.create');
    }
    public function store(PostStoreRequest $request)
    { 
        Post::create($request->only(['title', 'content', 'created_at', 'updated_at']));
        return redirect('/post/create');
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
    }
    public function update(Post $post, Request $request)
    {
        dd($request);
    }
    public function delete($id) 
    {
        dd('Delete');
    }
}
