<?php

return [
    'plugin' => [
        'name'        => 'Nathan\'s Contact plug-in',
        'description' => 'A simple yet effective contact plug-in',
        'navigation' => [
            'contact' => [
                'label' => 'Contact',
            ],
            'settings' => [
                'label'       => 'Contact',
                'description' => 'Manage the contact form settings',
                'category'    => 'Website',
            ]
        ],
        'permissions' => [
            'tab'    => 'Contact',
            'manage' => 'Manage the contact settings',
            'view'   => 'View the messages',
        ]
    ],
    'models' => [
        'message' => [
            'id' => 'ID',
            'name' => 'Name',
            'email_address' => 'E-mail address',
            'phone_number' => 'Phone number',
            'comment' => 'Comment',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at'
        ],
        'settings' => [
            'should_send_contact_email' => 'Should an e-mail be send out to notify when a new message is received?',
            'contact_email'             => 'The e-mail to send the notification to',
        ]
    ],
    'controllers' => [
        'messages' => [

        ]
    ],
    'components' => [
        'contactForm' => [
            'name'        => 'Contact form',
            'description' => 'Show a contact form',

            'message_sent_successfully' => 'Your message was received successfully',

            'front_end' => [
                'name'          => 'Name',
                'email_address' => 'E-mail address',
                'phone_number'  => 'Phone number',
                'comment'       => 'Comment',
                'submit'        => 'Submit',
            ]
        ]
    ],
];