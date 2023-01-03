<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Str;

class RegisterSessionController extends Controller
{
    public function store(RegisterFormRequest $request)
    {
        $firstname = request('firstname');
        $lastname = request('lastname');
        $fullname = $firstname . ' ' . $lastname;
        $slug = Str::slug($firstname . '-' . $lastname);
        $email = request('email');
        $password = password_hash(request('password'), PASSWORD_DEFAULT);

        $user = User::create([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'fullname' => $fullname,
            'slug' => $slug,
            'email' => $email,
            'password' => $password
        ]);

        Auth::login($user);
        return Redirect::to('/' . app()->getLocale())->with('success', __('success.register', ['name' => auth()->user()->firstname]));
    }

    public function create()
    {
        return view('auth.register');
    }
}
