<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log, Auth;

class UserLoginController extends Controller
{
    /**
     * Define the middleware.
     *
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Display the login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Login function.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // validate the request.
        $this->validate($request, [
            'email'     => 'required|email',
            'password'  => 'required|min:6',
        ]);

        $credentials = array(
            'email'     => $request->get('email'),
            'password'  => $request->get('password'),
        );

        // authenticate the request.
        if (Auth::guard('web')->attempt($credentials)) {
            return redirect()->route('users.show', Auth::id());
        }

        return redirect()->back()
                        ->withInput($request->only('email'));
    }

    /**
     * Logout function.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {

    }
}
