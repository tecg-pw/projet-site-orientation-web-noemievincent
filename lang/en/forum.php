<?php

return [

    'head_title' => 'Forum',
    'title' => 'Forum',
    'tagline' => '<p class="text-lg ">Reprehenderit voluptate sit nisi nisi irure quis laborum amet excepteur velit dolore dolor dolore aliqua. Don’t forget to take a look at our <a href="/' . app()->getLocale() . '/faq" class="underline underline-offset-2 decoration-1 decoration-solid text-orange">FAQs</a></p>',
    'guest_link' => '<p><a href="/' . app()->getLocale() . '/login" class="underline underline-offset-2 decoration-1 decoration-solid text-orange">Login</a> or <a href="/' . app()->getLocale() . '/register" class="underline underline-offset-2 decoration-1 decoration-solid text-orange">register</a> to ask a question</p>',
    'ask_question' => 'Ask a question',
    'profile_link' => '<p> Find your questions and answers on your <a href="/' . app()->getLocale() . '/users/username" class="underline underline-offset-2 decoration-1 decoration-solid text-orange">profile</a></p>',
    'last_subjects' => 'Last subjects',
    'last_replies' => 'Last replies',
    'single' => [
        'back_to_questions_link' => 'Back to questions',
        'more_replies' => 'More answers',
        'resolved' => 'Solved',
        'answer_button' => 'Answer',
        'infos' => '<p>published on the <time datetime=":datetime">:date</time> et <time datetime=":datetimeHours">:time</time></p>',
        'guest_link' => '<p><a href="/' . app()->getLocale() . '/login" class="underline underline-offset-2 decoration-1 decoration-solid text-orange">Login</a> or <a href="/' . app()->getLocale() . '/register" class="underline underline-offset-2 decoration-1 decoration-solid text-orange">register</a> to answer</p>',
    ],
    'reply' => [
        'count' => 'answers',
        'infos' => '<p>published on the <time datetime=":datetime">:date</time> at <time datetime=":datetimeHours">:time</time></p>',
        'question' => '<p>in <a href="/' . app()->getLocale() . '/forum/:slug" class="underline underline-offset-2 decoration-1 decoration-solid hover:text-orange">:question</a></p>',
    ]
];
