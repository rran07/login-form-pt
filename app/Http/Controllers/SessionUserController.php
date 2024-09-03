<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionUserController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $validated = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(! Auth::attempt($validated)){
            throw ValidationException::withMessages([
                'email' => 'Sorry, the email does not match',
                'password' => 'Sorry, the password does not match'
            ]);
        }

        request()->session()->regenerate();

        return redirect('/');


    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }

}
