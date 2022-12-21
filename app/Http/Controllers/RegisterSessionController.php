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
        $password = bcrypt(request('password'));

        $user = User::create([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'fullname' => $fullname,
            'slug' => $slug,
            'email' => $email,
            'password' => $password
        ]);

        Auth::login($user);
        return Redirect::to('/')->with('success', 'Your account was created successfully !');
    }

    public function create()
    {
        return view('auth.register');
    }
}
