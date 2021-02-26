<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ThongSo extends Model
{
    use Notifiable;
    // 
    protected $table = 'thong_so';
    protected $fillable = [
        'id',
        'tenthongso'
    ]; 
    public function chi_tiet() 
    {
        return $this->belongsToMany(ChiTiet::class);
    }
}
