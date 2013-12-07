<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 07/12/13
 * Time: 02:43
 */

require_once 'Dailymotion.php';
require_once 'config.php';

function getpropositions($nb_propositions)
{
    $config = config();

//----- Dailymotion object instanciation -----//
    $api = new Dailymotion();
    $api->setGrantType(
        Dailymotion::GRANT_TYPE_PASSWORD,
        $config['dailymotion']['apiKey'],
        $config['dailymotion']['apiSecret'],
        $scope = array('manage_videos'),
        array(
            'username' => $config['dailymotion']['user'],
            'password' => $config['dailymotion']['password']
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


//function getcategories()
//{
//    $config = config();
//
//    // Connexion base de données
//    $link = mysql_connect($config['db']['server'], $config['db']['username'], $config['db']['password'])
//    or die("Impossible de se connecter : " . mysql_error());
//    $db_selected = mysql_select_db($config['db']['table'], $link);
//    mysql_query("SET NAMES 'utf8'");
//    if (!$db_selected) {
//        die ('Impossible de sélectionner la base de données : ' . mysql_error());
//    }
//
//
//
//}


function getvideo($id)
{
    $config = config();

    // Connexion base de données
    $link = mysql_connect($config['db']['server'], $config['db']['username'], $config['db']['password'])
    or die("Impossible de se connecter : " . mysql_error());
    $db_selected = mysql_select_db($config['db']['name'], $link);
    mysql_query("SET NAMES 'utf8'");
    if (!$db_selected) {
        die ('Impossible de sélectionner la base de données : ' . mysql_error());
    }

    $reponse = mysql_query("SELECT * from videos WHERE id_daily = '".$id."'");


    return mysql_fetch_assoc($reponse);;
}

?>