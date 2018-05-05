<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log, App\User, Auth;

class UserRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'email'         => 'required|email|unique:users|max:255',
            'name'          => 'required',
            'phone_number'  => 'required',
            'password'      => 'required|confirmed|min:6',
        ]);

        $result = User::create($request->all());

        Auth::loginUsingId($result->id);

        return redirect()->route('users.show', $result->id);
    }
}
