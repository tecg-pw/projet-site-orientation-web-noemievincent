<?php

return [

    'head_title' => 'Internship offers',
    'title' => 'Internship offers',
    'tagline' => 'Companies often approach us to offer internships to our final year students. Over time, a network has been created within our section.',
    'tabs' => [
        'offers' => 'Internship offers',
        'partners' => 'Partner companies',
        'create' => 'Submit an internship',
    ],
    'published_at' => '<p class="text-sm">published on <time datetime=":datetime">:date</time></p>',
    'single' => [
        'alternative' => 'This offer is also available in :',
        'back_to_offers_link' => 'Back to offers',
        'skills_title' => 'Skills needed',
        'description_title' => 'Description and tasks of the internship',
        'apply_button' => 'Apply',
    ],
    'create' => [
        'head_title' => 'Submit an internship',
        'title' => 'Submit an internship',
        'form' => [
            'tagline' => 'Are you a company looking for interns? Post your offer directly on this site and applications will be guaranteed.',
            'company' => [
                'title' => 'Company information',
                'labels' => [
                    'logo' => 'Your company logo',
                    'company-name' => 'Name of your company',
                    'website' => 'Your website',
                ]
            ],
            'informations' => [
                'title' => 'Your informations',
                'labels' => [
                    'name' => 'First and last name',
                    'email' => 'E-mail address',
                ]
            ],
            'offer' => [
                'title' => 'Offer description',
                'labels' => [
                    'title' => 'Title of the offer',
                    'body' => 'Description and tasks of the internship',
                    'skills' => 'Skills needed',
                    'other_skills' => 'Other :',
                    'add_skills_hint' => 'Add as many skills as you want, separated by a comma.'
                ],
            ],
            'contract' => [
                'title' => 'Internship agreement',
                'labels' => [
                    'start_date' => 'Starting date',
                    'duration' => 'Duration',
                    'location' => 'Location',
                ]
            ],
            'reception_mode' => [
                'title' => 'Method of receipt of applications',
                'labels' => [
                    'email' => 'Via e-mail',
                    'url' => 'Redirection to a page on your site',
                ],
                'taglines' => [
                    'email' => '(You will receive the candidate’s information by e-mail)',
                    'url' => '(The application will be made directly on your site)',
                ],
                'inputs' => [
                    'email' => 'E-mail address',
                    'url' => 'URL',
                ],
            ],
            'button' => 'Submit my internship offer',
            'warning' => 'Before being published, your offer will be reviewed by an administrator.',
        ]
    ],
    'partners' => [
        'head_title' => 'Partner companies',
        'title' => 'Partner companies',
        'single' => [
            'back_to_partners_link' => 'Back to partner companies',
            'website_button' => 'Visit their website',
            'members_title' => 'Team members',
            'internships_title' => 'Their internship offers',
            'alumnis_title' => 'Our alumnis with them',
        ],
    ]
];
