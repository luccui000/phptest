<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class SanPham extends Model
{
    use Notifiable;
    protected $table = 'san_pham';
    protected $fillable = [
        'id',
        'masanpham',
        'tensanpham',
        'slug',
        'hinhanh',
        'mota'
    ]; 
    public function thong_so() 
    {
        return $this->belongsToMany(ThongSo::class);
    }
    public $timestamps = false;
}
