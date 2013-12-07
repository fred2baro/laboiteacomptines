<?php


function config()
{
    // ----- Dailymotion account settings -----//
    $d_apiKey         = 'adc44dde580413f364b8';
    $d_apiSecret      = 'a5cc9ceb99d8a69e8ae5b5fa344314ebdd010c0f';
    $d_user       = 'la_boite_a_comptines';
    $d_password   = 'comptines42';
//$videoTestFile = '/path/to/video/test.mp4';


// ----- DB settings -----//
    $db_server         = "parent-nounou.fr";
    $db_username       = "innovedu_comptin";
    $db_password       = "Z%u[fI_iE1T-";
    $db_name          = "innovedu_comptines_DEV";



    return array(
        'dailymotion' => array(
            'apiKey' => $d_apiKey,
            'apiSecret' => $d_apiSecret,
            'user' => $d_user,
            'password' => $d_password,
        ),
        'db' => array(
            'server' => $db_server,
            'username' => $db_username,
            'password' => $db_password,
            'name' => $db_name,
        )
    );
}