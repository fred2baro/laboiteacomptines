<?php
$val_retour = "not ok";
header("Content-Type: application/json", true);
$bonus = $_POST['like'];
$val = $_POST['valeur'];
include 'bdd.php';
$query = "UPDATE videos SET vide_rate = vide_rate + ".$val." WHERE id_daily = '".$bonus."'";
//echo $query;
mysql_query($query);
$val_retour = mysql_query("SELECT vide_rate FROM videos WHERE id_daily = '".$bonus."'");
//echo "SELECT vide_rate FROM videos  WHERE id_daily = '".$bonus."'";
$array = mysql_fetch_assoc($val_retour);

// Echoes: string
//echo gettype($array['vide_rate']);

mysql_close($link);
echo json_encode($array['vide_rate']);
?>