<?php

namespace App\Http\Controllers;

use App\Channels;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    { 
        return view('post.create');
    }
}
