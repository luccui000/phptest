<?php

namespace App\Http\Controllers\Api;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User; 
use Illuminate\Support\Facades\Auth;
use JWTAuth;

class UserController extends Controller
{ 
    public function me(Request $request) 
    { 
        return response()->json(['result' => JWTAuth::toUser()]);   
    }
    public function update(Request $request, User $user)
    { 
        $updated = $user->update($request->only('email', 'username')); 
        return response()->json(['result' => $updated]);
    } 
}
