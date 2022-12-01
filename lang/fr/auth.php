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
        'head_title' => 'Connexion',
        'title' => 'Connexion',
        'register_link' => '<p class="text-sm font-light">Pas encore de compte ? <a href="/register" class="text-orange hover:underline hover:underline-offset-2 hover:decoration-2 hover:decoration-solid">Inscrivez-vous</a></p>',
    ],
    'register' => [
        'head_title' => 'Inscription',
        'title' => 'Inscription',
        'tagline' => 'Nulla officia magna ullamco id irure aute aliqua dolore qui duis.',
        'login_link' => '<p class="text-sm font-light">Déjà un compte ? <a href="/login" class="text-orange hover:underline hover:underline-offset-2 hover:decoration-2 hover:decoration-solid">Connectez-vous</a></p>',
    ],
    'reset_password' => [
        'head_title' => 'Réinitialiser votre mot de passe',
        'title' => 'Mot de passe oublié ?',
        'tagline' => 'Veuillez saisir votre adresse email ci-dessous. Vous recevrez un lien pour réinitialiser votre mot de passe.',
        'back_to_login_link' => 'Retourner sur la page de connexion',
    ],

];
