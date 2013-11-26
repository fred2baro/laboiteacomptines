<?php

include("../lib/local_config.php");


try
{
    $results = $api->get('/videos', array(
		'fields' => 'thumbnail_180_url,title,url',
		'owner' => 'la_boite_a_comptines',
		'sort' => 'random',
		'limit' => '3',
		));

    foreach ($results['list'] as $result)
	{
		echo $result['title'];
	}

}
catch (Exception $e)
{
	echo $e;
}
