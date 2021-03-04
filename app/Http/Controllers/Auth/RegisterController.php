<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::create([
            'username' => Str::before($request->email, '@'),
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        if (!auth()->attempt($request->only('email', 'password')))
        {
            return back();
        }

        return redirect()->route('dashboard', auth()->id());
    }
}
