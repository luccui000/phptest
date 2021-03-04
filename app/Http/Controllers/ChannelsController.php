<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channels;

class ChannelsController extends Controller
{
    public function index()
    { 
        return view('channel.index');
    }
}
