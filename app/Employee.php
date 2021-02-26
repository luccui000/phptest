<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{ 
    use SoftDeletes;  
    protected $table = 'employees';
     
    protected $fillable = [ 
        'id',
        'firstname',
        'lastname',
        'dob',
        'user_id'
    ];
    public const VALIDATE_RULES = [
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'dob' => 'required|date',
    ];
    public $timestamps = true;
    protected $dates = ['deleted_at'];
}
