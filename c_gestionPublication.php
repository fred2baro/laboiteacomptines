<?php
/**
	* On donne à la variable $action la valeur recupere dans les differentes vues
	*/
$action = $_REQUEST['action'];
switch($action)
{
	case 'afficher':
		include("vues/v_ajout.php");
  		break;
	case 'confPublication':
		include("vues/v_consultation.php");
		break;
	
}
?>