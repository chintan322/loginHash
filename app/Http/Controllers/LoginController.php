<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function validatation(Request $request)
    {
        $user = $request->input('user');
        $data = array('user'=>$user);
        return view('dashboard')->with($data);
    }

    public function show()
    {
        return view('dashboard');
    }
}
