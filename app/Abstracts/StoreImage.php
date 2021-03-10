<?php

namespace App\Abstracts;
use App\Customer;

use Illuminate\Support\Str;

abstract class StoreImage  { 
    public function create($input) 
    { 
        return $this->action($input);
    }
    public function update($id, array $data)
    {
        return $this->builderUpdate($id, $data);
    }
    protected function store($input)
    {
        if(request()->has('image')) {
            $input->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);
       }
    } 
    abstract protected function action($input);
    abstract protected function builderUpdate($id, array $data);
}