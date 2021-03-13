<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = [
        'id',
        'name',
        'email',
        'company_id',
        'active',
        'image'
    ];
    public $timestamps = true;
    public function images()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
