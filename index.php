<?php
include('lib/helpers.php');

if(!isset($_REQUEST['app']))
    $app = 'web'; //Si l'application appeleante n'est pas identifiée, on considère que l'appel vient du web
else
    $app = $_REQUEST['app'];

switch($app)
{
    case 'web':
        // Dans le cas ou l'application appelé est un navigateur web
        include("vues/v_entete.php");

        if(!isset($_REQUEST['action']))
            $action = 'afficher';
        else
            $action = $_REQUEST['action'];

        switch($action)
        {
            case 'afficher':
                $propositions = getpropositions(4);
                include("vues/v_recherche.php");
                break;
            case 'confRecherche':
                $list = getlist($_REQUEST['cat']);
                include("vues/v_resultats.php");
                break;
            case 'consulter':
                $video = getvideo($_REQUEST['idDly']);
                incrementerLeNombreDeVues($video['vide_id']);
                include("vues/v_consultation.php");
                break;
            case 'contact':
                include("vues/v_contact.php");
                break;
            case 'ajout':
                $categories = getcategories();
                include("vues/v_ajout.php");
                break;
            case 'categories':
                include("vues/v_categories.php");
                break;
            case 'addMovie':
                $added = addMovie();
                include("vues/v_recherche.php");
                break;
            default :
                echo('404 - not found');
                break;
        }

        include("vues/v_pied.php");
        break;



    case 'mobile':
        // Cas ou l'application  appelante est une appli mobile
        if(!isset($_REQUEST['action']))
            $action = 'afficher';
        else
            $action = $_REQUEST['action'];

        switch($action)
        {
            case 'afficher':
                echo(json_encode(getpropositions(3)));
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
            case 'ajout':
                include("vues/v_ajout.php");
                break;
            default :
                echo('404 - not found');
                break;
        }
        break;

    default:
        echo('Undefined application');
        break;
}

?>
