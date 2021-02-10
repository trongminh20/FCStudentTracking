<?php
return [
    'db_host' => 'localhost',
    'db_username' => 'root',
    'db_password' => 'password',
    'db_name' => 'fc_student_tracking',
    'db_charset' => 'utf8',
    'db_options' => [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false]
];
