<?php $link = mysql_connect("serverDeMehdi/mysql5-16.90", "blugture_app", "fCgKqkvK")
    or die("Impossible de se connecter : " . mysql_error());
//echo 'Connexion réussie';
$db_selected = mysql_select_db("blugture_app", $link);
mysql_query("SET NAMES 'utf8'"); 
if (!$db_selected) {
   die ('Impossible de sélectionner la base de données : ' . mysql_error());
}
?>
