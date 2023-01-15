<?php

return [

    'forum' => [
        'question_created' => [
            'subject' => 'You posted a question',
            'greetings' => 'Hello :name,',
            'body' => 'You recently posted a question on the forum entitled « :title ».',
            'action' => 'See the question',
            'closure' => 'Have a nice day,',
        ],
        'reply_created' => [
            'subject' => 'We answered you!',
            'greetings' => 'Hello :name,',
            'body' => ':name answered your question « :title ».',
            'action' => 'See the comment',
            'closure' => 'Have a nice day,',
        ],
    ]

];
