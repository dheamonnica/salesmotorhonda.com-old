<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Server Requirements
    |--------------------------------------------------------------------------
    |
    | This is the default Laravel server requirements, you can add as many
    | as your application require, we check if the extension is enabled
    | by looping through the array and run "extension_loaded" on it.
    |
    */
    'core'         => [
        'php_version' => '7.1.3',
    ],
    'requirements' => [
        'php'         => [
            'openssl',
            'pdo',
            'mbstring',
            'tokenizer',
            'JSON',
            'cURL',
            'gd',
            'fileinfo',
            'exif',
            'xml',
            'ctype',
        ],
        'apache'      => [
            'mod_rewrite',
        ],
        'permissions' => [
            'storage/framework/' => '775',
            'storage/logs/'      => '775',
            'bootstrap/cache/'   => '775',
        ],
    ],
];
