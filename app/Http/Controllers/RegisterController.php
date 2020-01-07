<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'

        ]);

        $em = $request->input('email');
        $pwd = $request->input('password');

        $em = md5($em);
        $pwd =md5($pwd);

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $em;
        $user->password = $pwd;
        $user->save();
        //$user = User::create(request(['name']),$em,$pwd);

        //auth()->login($user);
        $data = array('user'=>$user);
        return redirect()->to('/');
    }

    public function show()
    {
        return view('login');
    }
}
