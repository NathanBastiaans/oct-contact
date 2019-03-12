<?php

return [
    'plugin' => [
        'name'        => 'Nathan\'s Contact plug-in',
        'description' => 'Een simpele maar effectieve contact plug-in',
        'navigation' => [
            'contact' => [
                'label' => 'Contact',
            ],
            'settings' => [
                'label'       => 'Contact',
                'description' => 'Beheer de contact formulier instellingen',
                'category'    => 'Website',
            ]
        ],
        'permissions' => [
            'tab'    => 'Contact',
            'manage' => 'Beheer de contact instellingen',
            'view'   => 'Bekijk de berichten',
        ]
    ],
    'models' => [
        'message' => [
            'id' => 'ID',
            'name' => 'Naam',
            'email_address' => 'E-mailadres',
            'phone_number' => 'Telefoonnummer',
            'comment' => 'Opmerking',
            'created_at' => 'Aangemaakt op',
            'updated_at' => 'Bewerkt op'
        ],
        'settings' => [
            'should_send_contact_email' => 'Moet er een e-mail verstuurd worden wanneer er een nieuw bericht is binnengekomen?',
            'contact_email'             => 'Het e-mailadres om de notificatie naar te sturen',
        ]
    ],
    'controllers' => [
        'messages' => [

        ]
    ],
    'components' => [
        'contactForm' => [
            'name'        => 'Contact formulier',
            'description' => 'Toon een contact formulier',

            'message_sent_successfully' => 'Je bericht is succesvol ontvangen!',

            'front_end' => [
                'name'          => 'Naam',
                'email_address' => 'E-mailadres',
                'phone_number'  => 'Telefoonnummer',
                'comment'       => 'Opmerking',
                'submit'        => 'Verstuur',
            ]
        ]
    ],
];