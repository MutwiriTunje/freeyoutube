<?php

return [
    'components' => [
        'db' => [
            'class' => \yii\db\Connection::class,
            'dsn' => 'pgsql:host=dpg-cu527ilds78s73duj3v0-aoregon-postgres.render.com;port=5432;dbname=freeyoutube',
            'username' => 'freeyoutube_user',
            'password' => 'szUiSLoFqyGp45RWyZOxWfpZSGhTFDln',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@common/mail',
            'useFileTransport' => false, // Set to false to send emails to the actual SMTP server
            'transport' => [
                'dsn' => 'smtp://48056d959f45ac:********d533@sandbox.smtp.mailtrap.io:587', // Mailtrap DSN
            ],
        ],

        // 'mailer' => [
        //     'class' => \yii\symfonymailer\Mailer::class,
        //     'viewPath' => '@common/mail',
        //     'transport' => [
        //         'class' => 'Swift_SmtpTransport',
        //         'host' => 'sandbox.smtp.mailtrap.io',
        //         'username' => '6fc17badd78caa',
        //         'password' => '********0e12',
        //         'port' => '2525',
        //         'encryption' => 'tls',
        //     ],
        //     // You have to set
        //     //
        //     // 'useFileTransport' => false,
        //     //
        //     // and configure a transport for the mailer to send real emails.
        //     //
        //     // SMTP server example:
        //     //    'transport' => [
        //     //        'scheme' => 'smtps',
        //     //        'host' => '',
        //     //        'username' => '',
        //     //        'password' => '',
        //     //        'port' => 465,
        //     //        'dsn' => 'native://default',
        //     //    ],
        //     //
        //     // DSN example:
        //     //    'transport' => [
        //     //        'dsn' => 'smtp://user:pass@smtp.example.com:25',
        //     //    ],
        //     //
        //     // See: https://symfony.com/doc/current/mailer.html#using-built-in-transports
        //     // Or if you use a 3rd party service, see:
        //     // https://symfony.com/doc/current/mailer.html#using-a-3rd-party-transport
        // ],
    ],
];
