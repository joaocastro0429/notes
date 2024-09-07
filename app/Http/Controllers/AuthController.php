<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function logout(){
        return "Logout";
    }

    public function loginsubmit(Request $request)
    {
        $data = [
            'username' => $request->input('text_username'),
            'password' => $request->input('text_password')
        ];

        return $data;
    }

}
