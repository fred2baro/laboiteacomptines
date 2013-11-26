<?php

require_once 'Dailymotion.php';

// ----- account settings -----//
$apiKey        = 'adc44dde580413f364b8';
$apiSecret     = 'a5cc9ceb99d8a69e8ae5b5fa344314ebdd010c0f';
$testUser      = 'la_boite_a_comptines';
$testPassword  = 'comptines42';
//$videoTestFile = '/path/to/video/test.mp4';

//----- scopes you need to run your tests -----//
$scopes = array('userinfo',
                'feed',
                'manage_videos');

//----- Dailymotion object instanciation -----//
$api = new Dailymotion();
$api->setGrantType(
    Dailymotion::GRANT_TYPE_PASSWORD,
    $apiKey,
    $apiSecret,
    $scope = array('manage_videos'),
    array(
        'username' => $testUser,
        'password' => $testPassword
    )
);
