<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function login_handle(Request $request)
    {
        $request->validate([
            'email' => ['email','required'],
            'password' => ['required']
        ]);

        alert()->success('Title', 'Lorem Lorem Lorem', 'success');
        return redirect()->back();
    }
    public function register()
    {
        return view('auth.register');
    }
}
