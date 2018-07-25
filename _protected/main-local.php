<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=192.168.16.6;dbname=phobphra_moph',
            'username' => 'ppadmin',
            'password' => '@min11242',
            'charset' => 'utf8',
        ],
        'db_pg' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'pgsql:host=192.168.16.1;port=5432;dbname=11242', // PostgreSQL
            'username' => 'postgres',
            'password' => 'postgres',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'service.phobphrahospital@gmail.com', //user ทีจะใช้ smtp
                'password' => 'phobphra11242',//รหัสผ่านของ user
                'port' => '587',
                'encryption' => 'tls',
                'streamOptions' => [
                    'ssl' => [
                        'allow_self_signed' => true,
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                    ],
                ],
            ],
            'useFileTransport' => FALSE,
             
        ],
    ],
];
