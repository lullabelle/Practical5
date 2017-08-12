<?php
session_start();

return [
    'client_id' => 'bd12f559648b44b19a9fb34e63b8b752', //this id given by instagram when registering client
    'client_secret' => '52de3f7af49444e6a715678346f0d892',// ""
    'redirect_uri' => 'http://' . $_SERVER['HTTP_HOST'] . '/complete-oauth.php',
    'scopes' => [
        'likes',
        'basic',
        'public_content'
    ]
];
