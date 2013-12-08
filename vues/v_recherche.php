
<!--Formulaire de recherche-->
<div id="banniere_image">
    <div id="banniere_recherche">
        <form method="POST" action="index.php?action=confRecherche" id="target">
            <input type="text" value="" name="cat" id="keyword" placeholder="entrez le nom de la comptine que vous cherchez."/>
            <input type="submit" value="Rechercher" id="submit"/>
        </form>
    </div>
</div>

<p id="accueil">
	Bienvenue sur la boîte à comptines !
	<br/> Vous trouverez ici de petites chansons pour vous accompagner dans l'éducation de vos enfants.
</p>

<aside>
	<h2>Les catégories :</h2>
	
	<ul id="categories">
		<li><a href="index.php?action=confRecherche&cat=classique" title="Grands classiques"><img src="images/8.jpg" alt="" /></a></li>
		<li><a href="index.php?action=confRecherche&cat=corps"	title="Découvrir le corps"><img src="images/7.jpg" alt="" /></a></li>
		<li><a href="index.php?action=confRecherche&cat=main" title="La main et ses 5 doigts"><img src="images/5.jpg" alt=""/></a></li>
		<li><a href="index.php?action=confRecherche&cat=gym" title="Un peu de gymnastique"><img src="images/01.jpg" alt=""/></a></li>
		<li><a href="index.php?action=confRecherche&cat=saut" title="Sur les genoux je saute"><img src="images/02.jpg" alt=""/></a></li>
		<li><a href="index.php?action=confRecherche&cat=math" title="Les maths pour bébé"><img src="images/3.jpg" alt=""/></a></li>
		<li><a href="index.php?action=confRecherche&cat=monde" title="Le monde environnant"><img src="images/04.jpg" alt=""/></a></li>
		<li><a href="index.php?action=confRecherche&cat=animal" title="Comment font les animaux"><img src="images/la_vache.jpg" alt="" /></a></li>
	</ul>
<p>pour apprendre par thème</p>

</aside>
<!--Vidéos suggérées-->


<article id="video_suggestion">

<!-- WARNING SEO ! ! ! Utilisation abusive d'une balise div pour chaque image (préférer transformer les img en bloc via CSS ! !  ! ! -->
	
<?php

foreach ($propositions as $video)
{
    echo '<div class="suggestion">';
    echo '<a href="index.php?action=consulter&idDly='.$video['id_daily'].'">';
    echo '<img width="250" height="150" src="'.$video['thumbnail_120_url'].'"></img>';
    echo '<p>';

    echo $video['vide_name'].' par '.$video['vide_created_by'];
    echo '</p>';
    echo '</a></div>';
}

if (isset($added))
{
    if ($added===1)
    {
        echo '<script>alert("La video à bien été ajoutée")</script>';
    }
    else
    {
        echo '<script>alert("Erreur lors de l\'ajout de la video")</script>';
    }
}
?>
</article>
