<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $user = User::where('email', request('email'))->first();
        if (Hash::check(request('password'), $user->password)) {
            Auth::login($user);
            return Redirect::to('/')->with('success', 'You are logged in');
        }
        ddd('pas ok');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}
