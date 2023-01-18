<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'These credentials do not match our records.',
    'password' => 'The provided password is incorrect.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',


    'login' => [
        'head_title' => 'Login',
        'title' => 'Login',
        'register_link' => '<p class="text-sm font-light">No account yet? <a href="/en/register" dusk="register-link" class="text-orange hover:underline hover:underline-offset-2 hover:decoration-2 hover:decoration-solid">Register</a></p>',
    ],
    'register' => [
        'head_title' => 'Register',
        'title' => 'Register',
        'tagline' => 'Nulla officia magna ullamco id irure aute aliqua dolore qui duis.',
        'login_link' => '<p class="text-sm font-light">Already have an account? <a href="/en/login" class="text-orange hover:underline hover:underline-offset-2 hover:decoration-2 hover:decoration-solid">Login</a></p>',
    ],
    'forgot_password' => [
        'head_title' => 'Reset your password',
        'title' => 'Forgot your password?',
        'tagline' => 'Please enter your email address below. You will receive a link to reset your password.',
        'back_to_login_link' => 'Back to the login page',
    ],
    'reset_password' => [
        'head_title' => 'Reset your password',
        'title' => 'Reset your password',
    ],

];
