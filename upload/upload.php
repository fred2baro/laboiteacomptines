<?php 

include("../lib/local_config.php");
include("../lib/bdd.php");


$movedfile = 'uploads/'.time().'.avi';
move_uploaded_file($_FILES['video']['tmp_name'], $movedfile);

$url = $api->uploadFile($movedfile);
$result = $api->post(
    '/videos',
    array('fields' => 'id,url',
	'tags' => $_POST['categorie'],
	'url'     => $url,
        'title'     => $_POST['titre'],
        'published' => true,
	'private'   => false,
        'channel'   => 'kids')
);


	$sql = 'INSERT INTO videos (vide_id, vide_name, vide_url, vide_url_dailymotion, vide_nbvue, vide_rate, vide_published, vide_description, vide_paroles, vide_virtual_name, vide_created_by, vide_created_at, vide_updated_at, id_daily) VALUES (NULL, \''.$_POST['titre'].'\', \'index.php?uc=rechercher&action=consulter&idDly='.$result['id'].'\', \''.$result['url'].'\', \'0\', \'0\', \'1\', \'\', \''.$_POST['paroles'].'\', \'\', \''.$_POST['auteur'].'\', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, \''.$result['id'].'\')';
	$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
	mysql_close(); 


echo 'Done.';
