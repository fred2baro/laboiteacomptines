<?php
/**
	* On donne à la variable $action la valeur recupere dans les differentes vues
	*/
$action = $_REQUEST['action'];
switch($action)
{
	case 'afficher':
		include("vues/v_recherche.php");
  		break;
	case 'confRecherche':
		include("vues/v_resultats.php");
		break;	
	case 'consulter':
		include("vues/v_consultation.php");
		break;
	case 'contact':
		include("vues/v_contact.php");
		break;
}
?>