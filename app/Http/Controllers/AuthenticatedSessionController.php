<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(string $locale, LoginFormRequest $request)
    {
        $validated = $request->validated();

        if (auth()->attempt($validated)) {
            request()->session()->regenerate();
            return redirect('/')->with('success', 'Welcome back, ' . auth()->user()->name);
        }

        return back()
            ->withErrors([
                'email' => trans('auth.failed'),
                'password' => trans('auth.password'),
            ])
            ->withInput();
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}
