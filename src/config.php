<?php
return ['DATABASE' => [
    'db_host' => 'localhost',
    'db_username' => 'root',
    'db_password' => 'password',
    'db_name' => 'fc_student_tracking',
    'db_charset' => 'utf8',
    'db_options' => [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false]
],
    'INVOICE_INFO' => ['name' => 'First College',
        'address' => '532 Leon Ave, Second Floor',
        'city'=> 'Kelowna, BC V1Y 6J6',
        'tel' => '778-478-6611',
        'fax' => '778-478-6610',
        'email' => 'enrollment@firstcollege.ca',
        'logo' => 'images/logo.png'
        ]
];
