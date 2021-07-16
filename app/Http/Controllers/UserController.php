<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function auth(Request $request){
        $validated=$request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(Auth::attempt($validated)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        else{
            return redirect('login');
        }
    }
    public function edit (Request $request){
        $validated=$request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:11',
            'address' => 'required',
            'zipCode' => 'required|numeric|digits:10',
            'CC' => 'required|numeric|digits:16'
        ]);
        $user=User::find(Auth::user()->id)->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'address' => $validated['address'],
            'zipCode' => $validated['zipCode'],
            'CC' => $validated['CC']
        ]);
    }
}
