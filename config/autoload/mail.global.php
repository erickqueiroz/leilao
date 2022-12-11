<?php

return [
    'mail' => [
        'name' => 'mobiup',
        'connectionClass' => 'login',
        'host' => 'rl-55us.hmservers.net',
        'port' => 587,
        'connection_config' => [
            'username' => 'support@mobiup.io',
            'password' => 'Mobiup!@#',
            'from' => 'nao-responder@mobiup.io',
            'ssl' => 'tls',
            'report_error_log' => 'andrecardosodev@gmail.com'
        ],
    ],
];
