<?php

namespace App\Http\Middleware; 

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException; 
use Closure;

class VerifyJWTToken
{ 
    public function handle($request, Closure $next)
    {
        try {    
            $user = JWTAuth::parseToken()->authenticate();   
        }catch (JWTException $e) { 
            return response()->json();
            if($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException) {
                return response()->json(['token_expired'], $e->getStatusCode());
            }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException) {
                return response()->json(['token_invalid'], $e->getStatusCode());
            }else{
                return response()->json(['error'=>'Token is required']);
            }
        }
        return $next($request);
    }
}
