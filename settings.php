<?php
session_start();

return [
    'client_id' => 'xxx', //this id given by instagram when registering client
    'client_secret' => 'xxx',// ""
    'redirect_uri' => 'http://' . $_SERVER['HTTP_HOST'] . '/Practicals/Practical5/complete-oauth.php',
    'scopes' => [
        'likes',
        'basic',
        'public_content'
    ]
];
