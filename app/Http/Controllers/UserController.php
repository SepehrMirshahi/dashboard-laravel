<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function add(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'pass' => 'required|min:8',
            'phone' => 'required|numeric|digits:11'
        ]);
        $user = new User();
        $user->email = $validated['email'];
        $user->name = $validated['name'];
        $user->password = Hash::make($validated['pass']);
        $user->phone = $validated['phone'];
        $user->save();
        Auth::login($user);
        if (isset(Auth::user()->email))
            return view('dashboard.dashboard');
    }

    public function auth(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        } else {
            return redirect('login');
        }
    }

    public function edit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:11',
            'address' => 'min:3|nullable',
            'zipCode' => 'numeric|digits:10|nullable',
            'CC' => 'numeric|digits:16|nullable',
            'avatar' => 'image|nullable'
        ]);
        $update = array_slice($validated, 0, 6);
        $user = User::find(Auth::user()->id);
        foreach ($validated as $key => $value) {
            $user->$key = $value;
        }
        if ($request->file('avatar') != null) {
            $picExt = $request->file('avatar')->getClientOriginalExtension();
            $avatarName = uniqid() . '.' . $picExt;
            $path = $request->file('avatar')->storeAs('public/avatars', $avatarName);
            $user->avatar = $avatarName;
        }
        $user->save();
        return redirect()->back();
    }
}
