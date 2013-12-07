<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 07/12/13
 * Time: 02:43
 */

require_once 'Dailymotion.php';

function getpropositions($nb_propositions)
{
    require_once 'dailymotion_config.php';

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

    $results = $api->get('/videos', array(
        'fields' => 'id,thumbnail_url,title,url',
        'owner' => 'la_boite_a_comptines',
        'sort' => 'random',
        'limit' => $nb_propositions,
    ));

    return $results;
}

?>