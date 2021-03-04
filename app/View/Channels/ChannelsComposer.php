<?php

namespace App\View\Channels;

use App\Channels;
use Illuminate\View\View;

class ChannelsComposer {
    public function compose(View $view) 
    {
        $view->with('channels', Channels::orderBy('name', 'asc')->get());
    }
}