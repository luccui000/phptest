<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public const VALIDATION_RULES = [ 
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6'
    ];
    public function employees()
    {
        return $this->hasOne('App\Employee', 'user_id', 'id');
    }
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
    public function images()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function hasPermission(Permission $permission)
    {
        // toán tử  !! sẽ ép kiểu trả về true hoặc false
        // optional nếu kết quả là null thì không báo lỗi
        return !!optional(optional($this->role)->permissions)->contains($permission);
    }
}