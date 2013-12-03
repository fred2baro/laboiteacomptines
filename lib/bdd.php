<?php $link = mysql_connect("parent-nounou.fr", "innovedu_comptin", "Z%u[fI_iE1T-")
    or die("Impossible de se connecter : " . mysql_error());
//echo 'Connexion réussie';
$db_selected = mysql_select_db("innovedu_comptines_DEV", $link);
mysql_query("SET NAMES 'utf8'"); 
if (!$db_selected) {
   die ('Impossible de sélectionner la base de données : ' . mysql_error());
}
?>
