<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ChiTiet extends Model
{
    use Notifiable;
    protected $table = 'chi_tiet';
    protected $fillable = [
        'id',
        'ten',
        'giatri'
    ]; 
}
