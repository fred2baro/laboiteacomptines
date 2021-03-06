<!--Formulaire de recherche-->
		<div id="banniere_image">
			<div id="banniere_recherche">
				<form method="POST" action="index.php?uc=rechercher&action=confRecherche" id="target">
                                <input type="text" value="" name="keyword" id="keyword">
                                <input type="submit" value="Rechercher" id="submit">
                            </form>
			</div>
		</div>
		
		<p id="accueil">
			<em>"</em>Bienvenue sur la boîte à comptines ! Vous trouverez ici de petites chansons pour vous accompagner dans l'éducation de vos enfants.<em>"</em>
		</p>
		
		<ul id="categories">
			<li><a href="index.php?uc=rechercher&action=confRecherche&cat=classiques" title="Grands classiques"><img src="images/8.jpg" alt="" /></a></li>
			<li><a href="index.php?uc=rechercher&action=confRecherche&cat=corps"	title="Découvrir le corps"><img src="images/7.jpg" alt="" /></a></li>
			<li><a href="index.php?uc=rechercher&action=confRecherche&cat=main" title="La main et ses 5 doigts"><img src="images/5.jpg" alt=""/></a></li>
			<li><a href="index.php?uc=rechercher&action=confRecherche&cat=gym" title="Un peu de gymnastique"><img src="images/01.jpg" alt=""/></a></li>
			<li><a href="index.php?uc=rechercher&action=confRecherche&cat=saut" title="Sur les genoux je saute"><img src="images/02.jpg" alt=""/></a></li>
			<li><a href="index.php?uc=rechercher&action=confRecherche&cat=math" title="Les maths pour bébé"><img src="images/3.jpg" alt=""/></a></li>
			<li><a href="index.php?uc=rechercher&action=confRecherche&cat=monde" title="Le monde environnant"><img src="images/04.jpg" alt=""/></a></li>
			<li><a href="index.php?uc=rechercher&action=confRecherche&cat=animal" title="Comment font les animaux"><img src="images/la_vache.jpg" alt="" /></a></li>
		</ul>
		
		<!--Vidéos suggérées-->
		<?php

include("lib/local_config.php");


try
{
    $results = $api->get('/videos', array(
		'fields' => 'id,thumbnail_url,title,url',
		'owner' => 'la_boite_a_comptines',
		'sort' => 'random',
		'limit' => '3',
		));

    foreach ($results['list'] as $result)
	{
		echo '<div class="suggestion">';
		echo '<a href="index.php?uc=rechercher&action=consulter&idDly='.$result['id'].'">';
			echo '<img width="250" height="150" src="'.$result['thumbnail_url'].'"></img>';
				echo '<p>';
					
					echo $result['title'].' par auteur';
				echo '</p>';	
		echo '</a></div>';
	}

}
catch (Exception $e)
{
	echo $e;
}
?>
