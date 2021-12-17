<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AdminAuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest.admin')->except('logout');
    }

    public function getLogin() 
    {
        return view('backend.auth.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (! Auth::guard('admin')->attempt($credentials)) {
            throw ValidationException::withMessages([
                'username' => __('auth.failed'),
            ]);
        }

        return redirect()->intended('admin/');
    }

    public function logout(){
        auth('admin')->logout();
        
        return redirect()->route('admin.getLogin');
    }
}
