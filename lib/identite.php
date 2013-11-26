<?php
$val_retour = "not ok";
header("Content-Type: application/json", true);
$bonus = $_POST['infos'];
include 'bdd.php';
$val_retour = mysql_query("SELECT * FROM videos WHERE id_daily = '".$bonus."'");
//echo "SELECT * FROM videos WHERE id_daily = '".$bonus."'";
$array = mysql_fetch_assoc($val_retour);


//echo gettype($array['vide_rate']);

mysql_close($link);
echo json_encode($array);
?>