<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 

class Employee extends Model
{ 
    protected $table = 'employees';
     
    protected $fillable = [ 
        'id',
        'firstname',
        'lastname',
        'dob'
    ];
    public const VALIDATE_RULES = [
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'dob' => 'required|date',
    ];
    public $timestamps = true;
}
