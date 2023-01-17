<?php

return [

    'greetings' => 'Bonjour :name,',
    'closure' => 'Bonne journée,',
    'forum' => [
        'question_created' => [
            'subject' => 'Vous avez posté une question',
            'body' => 'Vous avez récemment posté une question sur le forum intitulée « :title ».',
            'action' => 'Aller voir la question',
        ],
        'resolved_question' => [
            'subject' => 'Votre question a été résolue !',
            'body' => 'Votre question « :title » a été marqué comme résolue par l’un de nos admins.',
            'action' => 'Aller voir la question',
        ],
        'reply_created' => [
            'subject' => 'On vous a répondu !',
            'body' => ':name a répondu à votre question « :title ».',
            'action' => 'Aller voir le commentaire',
        ],
    ],
    'pending_offer_created' => [
        'greetings' => 'Bonjour,',
        'subject' => 'Nous avons reçu votre offre !',
        'body' => 'Vous avez récemment envoyé une offre de stage sur notre site. Voici ce que nous avons reçu.',
    ],

];
