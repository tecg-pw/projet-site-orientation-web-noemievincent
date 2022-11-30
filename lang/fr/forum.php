<?php

return [

    'head_title' => 'Forum',
    'title' => 'Forum',
    'tagline' => '<p class="text-lg ">Reprehenderit voluptate sit nisi nisi irure quis laborum amet excepteur velit dolore dolor dolore aliqua. N’oubliez pas de jeter un oeil à notre  <a href="/faq" class="underline underline-offset-2 decoration-1 decoration-solid text-orange">FAQ</a></p>',
    'guest_link' => '<p><a href="/login" class="underline underline-offset-2 decoration-1 decoration-solid text-orange">Connectez-vous</a> ou <a href="/register" class="underline underline-offset-2 decoration-1 decoration-solid text-orange">créez un compte</a> pour poser une question</p>',
    'ask_question' => 'Poser une question',
    'profile_link' => '<p> Retrouvez vos questions et réponses sur votre <a href="/username" class="underline underline-offset-2 decoration-1 decoration-solid text-orange">profil</a></p>',
    'last_subjects' => 'Derniers sujets',
    'last_replies' => 'Dernières réponses',
    'single' => [
        'back_to_questions_link' => 'Retour aux questions',
        'more_replies' => 'Plus de réponses',
        'resolved' => 'Résolue',
        'answer_button' => 'Répondre',
        'infos' => '<p>publiée le <time datetime=":datetime">:date</time> à <time datetime=":datetimeHours">:time</time></p>',
        'guest_link' => '<p><a href="/login" class="underline underline-offset-2 decoration-1 decoration-solid text-orange">Connectez-vous</a> ou <a href="/register" class="underline underline-offset-2 decoration-1 decoration-solid text-orange">créez un compte</a> pour répondre</p>',
    ],
    'reply' => [
        'count' => 'réponses',
        'infos' => '<p>publiée le <time datetime=":datetime">:date</time> à <time datetime=":datetimeHours">:time</time></p>',
        'question' => '<p>dans <a href="/forum/:slug" class="underline underline-offset-2 decoration-1 decoration-solid hover:text-orange">:question</a></p>',
    ]
];
