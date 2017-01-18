<?php
return [

      'driver' => env('MAIL_DRIVER', 'smtp'),
    'host' => env('MAIL_HOST', 'smtp.gmail.com'),
    'port' => env('MAIL_PORT', 587),
    'from' => ['address' => 'something@gmail.com', 'name' => 'jesse'],
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),

    //Maybe here is your problem
    'username' => env('MAIL_USERNAME','nag.ravi.111@gmail.com'),
    'password' => env('MAIL_PASSWORD', 'sarwan@26'),
    'sendmail' => '/usr/sbin/sendmail -bs',

];