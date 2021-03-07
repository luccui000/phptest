<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $guarded = [];
    public $fillable = [
        'id',
        'title',
        'content'
    ];
    public function images()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    public $timestamps = true;
    public const VALIDATION_RULES = [
        'title'     => 'required|min:10|max:255',
        'content'   => 'required'
    ];
    public const VALIDATION_MESSAGES = [
        'title.required' => 'Vui lòng nhập tiêu đề  bài viết',
        'title.min' => 'Tiêu đề bài viết ít nhất 10 kí tự',
        'title.max' => 'Tiêu đề bài viết tối đa 255 kí tự',
        'content.required' => 'Vui lòng nhập nội dung bài viết',
    ];
}
