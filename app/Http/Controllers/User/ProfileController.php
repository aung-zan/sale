<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User, App\Product, Log;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display the user's info and his posts.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $states     = config('constants.states');
        $user       = User::findorFail($id);
        $products   = Product::where('deleted', 0)->get()->toArray();

        return view('profile.show', compact('user', 'products', 'states'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $states     = config('constants.states');
        $user       = User::findorFail($id);

        return view('profile.edit', compact('user', 'states'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'          => 'required',
            'email'         => 'required|email',
            'phone_number'  => 'required',
        ]);

        $user = User::findorFail($id);

        if ($request->get('password') == null) {
            $request = $request->except('password');
        } else {
            $request = $request->all();
        }
        $user->update($request);

        return redirect()->route('users.show', $id);
    }
}
