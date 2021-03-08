<?php

namespace App\Http\Controllers\Api;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User; 
use Illuminate\Support\Facades\Auth;
use JWTAuth;

class UserController extends Controller
{ 
    public function register()
    {
        return view('user.register');
    }
    public function me(Request $request) 
    {  
        $user = JWTAuth::toUser();
        $userId = $user->id;
        $userImage = User::find($userId)->images()->first();
        return response()->json(['user' => $user, 'image' => $userImage->url ]);   
    }
    public function update(Request $request, User $user)
    { 
        $updated = $user->update($request->only('email', 'username')); 
        return response()->json(['result' => $updated]);
    } 
}
