<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header
        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../../src/view/',
        ],
        // Monolog settings
        'logger' => [
            'name' => 'slim-skeleton',
            'path' => __DIR__ . '/../../var/logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];