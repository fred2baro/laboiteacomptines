<?php
header('Content-type: text/html; charset=UTF-8');
?>
<h1>Vos comptines</h1>
<script>
function infos(val){
	var auteur;
  		$.ajax({
    		url : "http://blugture.net/comptines/lib/identite.php",
		    type: "POST",
		    data : {infos : val},
		    success: function(data)
		    	{
		    	var auteur_id = "#auteur_"+val;
		    	$(auteur_id).html(data.vide_created_by);
		    	console.log(auteur_id + " = " +data.vide_created_by );
		    	}

		    });
  			//alert(auteur);
//return auteur;
//alert(auteur);
}
</script>

<p><?= count($list) ?> vidéos ont été trouvées pour la recherche <?= $_REQUEST["cat"] ?> </p>
<div id="list">

  <?php

  foreach ($list as $video)
  {
      echo '<ul class="list_resultat">';
      echo      '<li>';
      echo          '<a href="index.php?action=consulter&idDly='.$video['id_daily'].'">';
      echo              '<img src="'.$video['thumbnail_120_url'].'" id="video">';
      echo          '</a>';
      echo          '<div class="resultats">';
      echo              '<a href="index.php?action=consulter&idDly='.$video['id_daily'].'">';
      echo                  '<h2>'.$video['vide_name'].'</h2>';
      echo              '</a>';
      echo              '<p>Publié le : '.$video['vide_created_at'].' </p>';
      echo              '<p id="auteur">'.$video['vide_created_by'].'</p>';
      echo              '<p id="vues">Nombre de vues '.$video['vide_nbvue'].'</p>';
      echo              '<p></p>';
      echo          '</div>';
      echo      '</li>';
      echo  '</ul>';
  }
	?>

</div>
