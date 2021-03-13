<?php

namespace App\Abstracts;
use App\Customer;

use Illuminate\Support\Str;

abstract class StoreImage  { 
    public function create($input) 
    { 
        $this->store($input);
        return $this->builderCreate($input);
    }
    public function update($input)
    {
        $this->store($input);
        return $this->builderUpdate($input);
    }
    protected function store($input)
    {
        if(request()->has('image')) {
            $input->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);
        }
    } 
    abstract protected function builderCreate($input);
    abstract protected function builderUpdate($input);
}