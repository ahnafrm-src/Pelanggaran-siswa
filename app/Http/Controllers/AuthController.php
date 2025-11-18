<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function index()
    {
        if(session('user_id')) {
            return redirect()->route('home');
        }

        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $request->username)->first();

        if(!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['username' => 'Username atau Password salah'])->withInput();
        }
        session(['user_id' => $user->id, 'user_name' => $user->username, 'user_level' => $user->level]);
        
        return redirect()->route('home');
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }
}
