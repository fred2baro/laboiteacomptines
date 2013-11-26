<?php
function getAuteur($id)

	include("lib/bdd.php");
	$sql = "SELECT * from videos WHERE id_daily = '$id'";
	$query = mysql_query($sql);
	$line = mysql_fetch_assoc($query);
	
	return $line["vide_created_by"];
	?>