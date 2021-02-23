<?php

namespace App\Http\Controllers;

use App\User;
use Hash;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException; 
use Illuminate\Support\Facades\Validator; 

class AuthController extends Controller
{  
    public function __construct(){  
        // $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }   
  
    public function register(Request $request)
    {  
        $rules = array_merge(User::VALIDATION_RULES, ['name' => 'required|string|max:255']);
        $validator = Validator::make($request->input(),  $rules);  
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);
        return response()->json([
            'status'=> 200,
            'message'=> 'User created successfully',
            'data'=>$user
        ], 200); 
        
    }
    // [POST] /api/login 
    public function login(Request $request)
    {  
        $user = $request->only('email', 'password');
        $validator = Validator::make($request->input(), User::VALIDATION_RULES);
        $token = null;  
        if (!$token = JWTAuth::attempt($user)) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid Email or Password',
            ], 401);
        }
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => JWTAuth::factory()->getTTL() * 60
        ]);
    }
 
    
    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    // [POST] /api/logout
    public function logout(Request $request)
    {
        JWTAuth::validate($request, [ 'token' => 'required' ]); 
        try {
            JWTAuth::invalidate($request->token); 
            return response()->json([
                'status' => true,
                'message' => 'User logged out successfully'
            ]);
        } catch (JWTException $exception) {
            return response()->json([
                'status' => false,
                'message' => 'Sorry, the user cannot be logged out'
            ], 500);
        }
    } 
}
