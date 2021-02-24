<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ChiTiet extends Model
{
    use Notifiable;
    protected $table = 'san_pham';
    protected $fillable = [
        'id',
        'tensanpham'
    ]; 
    public function san_pham() 
    {
        $this->belongsToMany('App\ThongSo', 'san_pham_thong_so', 'id', 'id');
    }
}
