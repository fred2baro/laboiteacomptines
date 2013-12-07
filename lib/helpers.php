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


    return mysql_fetch_assoc($reponse);
}


function getlist($tag)
{
    $config = config();

    // Connexion base de données
    $link = mysql_connect($config['db']['server'], $config['db']['username'], $config['db']['password'])
    or die("Impossible de se connecter : " . mysql_error());
    $db_selected = mysql_select_db($config['db']['name'], $link);
    if (!$db_selected) {
        die ('Impossible de sélectionner la base de données : ' . mysql_error());
    }

    $sql = "SELECT * from videos WHERE vide_tag LIKE '%".$tag."%'";
    $reponse = mysql_query($sql);


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


    //Transformation du resultat de la requete en tableau
    // et récupérationdes données de Dailymotion
    $result = array();
    while ($video = mysql_fetch_array($reponse, MYSQL_ASSOC))
    {
		$thumbnail = $api->get('/videos', array(
				'fields' => 'id,thumbnail_120_url',
				'ids' => $video['id_daily'],
			));
        $result[$video['vide_id']] = array(
            'id_daily' => $video['id_daily'],
            'vide_name' => $video['vide_name'],
            'vide_nbvue' => $video['vide_nbvue'],
            'vide_paroles' => $video['vide_paroles'],
            'vide_created_by' => $video['vide_created_by'],
            'vide_created_at' => substr($video['vide_created_at'],0,10),
            'thumbnail_120_url' => $thumbnail['list']['0']['thumbnail_120_url'],
        );
    }

    return $result;
}


function incrementerLeNombreDeVues($id)
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

    $sql = "UPDATE videos set vide_nbvue = vide_nbvue + 1 WHERE vide_id = '".$id."'";
    $reponse = mysql_query($sql);


    return $reponse;
}

?>
