<?php

namespace App;

use Illuminate\Http\Request;
//use User;

class CredentialCheck{
    public function Authentication(Request $request)
    {
        $input = $request->all();
        $em = $input['email'];
        $pwd = $input['password'];

        if($user = User::where('email',$em)->where('password',$pwd)->first())
        {
            $input['user'] = $user;
            $request->replace($input);
            return $request;
        }
        else{
            return false;
        }
    }
}
