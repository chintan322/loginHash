<?php

namespace App\Http\Middleware;
use App\User;
use Closure;
use \App\CredentialCheck;           //Credential is used for verifying the user

class HashCredential
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $r = (new CredentialCheck)->Authentication($request);

        //if(!$r)
        if($r == false)
        {
            return redirect()->back();
        }
        else
        {
            return $next($request);
        }
    }
}
