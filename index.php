<?php
	session_start();
	include("vues/v_entete.php");
	if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
	else
	/**
	* On donne a la variable $uc la valeur renvoyé par "v_bandeau.php"
	*/
	 $uc = $_REQUEST['uc'];
	switch($uc)
	/**
	* On utilise la variable $uc dans un switch afin de gérer les différentes pages souhaitées
	*/
	{
	case 'accueil':
					include("vues/v_recherche.php");
					break;
	case 'rechercher': 
					include("c_gestionRecherche.php");
					break;
	case 'publier' :
					include("c_gestionPublication.php");
					break;
	}
	include("vues/v_pied.php");
?>
