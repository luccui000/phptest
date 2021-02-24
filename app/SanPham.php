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
        'tensanpham'
    ]; 
    public function thong_so() 
    {
        $this->belongsToMany('App\ThongSo', 'san_pham_thong_so', 'sanpham_id', 'thongso_id');
    }
    public $timestamps = false;
}
