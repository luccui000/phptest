<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    public $guarded = [];

    public function imageable()
    {
        return $this->morphTo();
    }
}
