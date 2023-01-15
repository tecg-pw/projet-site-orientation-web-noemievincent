<?php

return [

    'forum' => [
        'question_created' => [
            'subject' => 'Vous avez posté une question',
            'greetings' => 'Bonjour :name,',
            'body' => 'Vous avez récemment posté une question sur le forum intitulée « :title ».',
            'action' => 'Aller voir la question',
            'closure' => 'Bonne journée,',
        ],
        'reply_created' => [
            'subject' => 'On vous a répondu !',
            'greetings' => 'Bonjour :name,',
            'body' => ':name a répondu à votre question « :title ».',
            'action' => 'Aller voir le commentaire',
            'closure' => 'Bonne journée,',
        ],
    ]

];
