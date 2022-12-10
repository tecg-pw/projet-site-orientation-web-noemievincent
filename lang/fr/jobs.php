<?php

return [

    'head_title' => 'Offres de stages',
    'title' => 'Offres de stages',
    'tagline' => 'Les entreprises s’adressent souvent à nous afin de proposer des stages à nos étudiants en dernière année. Au fil du temps, un réseau s’est créé au sein de notre section.',
    'tabs' => [
        'offers' => 'Offres de stages',
        'partners' => 'Entreprises partenaires',
        'create' => 'Proposer un stage',
    ],
    'published_at' => '<p class="text-sm">publiée le <time datetime=":datetime">:date</time></p>',
    'single' => [
        'alternative' => 'Cette offre est aussi disponible en :',
        'back_to_offers_link' => 'Retour aux offres',
        'skills_title' => 'Compétences nécessaires',
        'description_title' => 'Description et missions du stage',
        'apply_button' => 'Postuler',
    ],
    'create' => [
        'head_title' => 'Proposer un stage',
        'title' => 'Proposer un stage',
        'form' => [
            'tagline' => 'Vous êtes une entreprise en recherche de stagiaires ? Publiez directement votre proposition sur ce site et les candidatures seront garanties.',
            'company' => [
                'title' => 'Informations de l‘entreprise',
                'labels' => [
                    'logo' => 'Logo de votre entreprise',
                    'name' => 'Nom de votre entreprise',
                    'website' => 'Votre site web',
                ]
            ],
            'informations' => [
                'title' => 'Vos informations',
                'labels' => [
                    'name' => 'Nom et prénom',
                    'email' => 'Adresse e-mail',
                ]
            ],
            'offer' => [
                'title' => 'Description de l‘offre',
                'labels' => [
                    'title' => 'Titre de l‘offre',
                    'body' => 'Description et missions du stage',
                    'skills' => 'Compétences nécessaires',
                    'other_skills' => 'Autres :',
                    'add_skills' => 'Ajoutez une compétence'
                ],
            ],
            'contract' => [
                'title' => 'Convention de stage',
                'labels' => [
                    'date' => 'Date du stage',
                    'duration' => 'Durée du stage',
                    'location' => 'Lieu du stage',
                ]
            ],
            'reception_mode' => [
                'title' => 'Mode des réception des candidatures',
                'labels' => [
                    'email' => 'Par email',
                    'url' => 'Redirection sur une page de votre site',
                ],
                'taglines' => [
                    'email' => '(Vous recevrez les informations du candidat directement par e-mail)',
                    'url' => '(La candidature se fera directement sur votre site)',
                ],
                'inputs' => [
                    'email' => 'Adresse e-mail',
                    'url' => 'URL',
                ],
            ],
            'button' => 'Envoyer mon offre de stage',
            'warning' => 'Avant d’être publiée, votre offre sera vérifiée par un administrateur.',
        ]
    ],
    'partners' => [
        'head_title' => 'Entreprises partenaires',
        'title' => 'Entreprises partenaires',
        'single' => [
            'back_to_partners_link' => 'Retour aux entreprises partenaires',
            'website_button' => 'Visiter leur site web',
            'members_title' => 'Membres de l‘équipe',
            'internships_title' => 'Leurs offres de stages',
            'alumnis_title' => 'Nos alumnis chez eux',
        ],
    ]
];
