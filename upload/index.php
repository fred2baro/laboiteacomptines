<?php

include("../lib/bdd.php");

?>

<form method="post" action="upload.php" enctype="multipart/form-data">
     <label for="mon_fichier">Fichier (video) :</label><br />
     <input type="file" name="video" id="video" /><br />
     <label for="auteur">Nom de l'auteur :</label><br />
     <input type="text" name="auteur" id="auteur" /><br />
     <label for="titre">Titre de la comptine:</label><br />
     <input type="text" name="titre" id="titre" /><br />
     <label for="paroles">Paroles :</label><br />
     <textarea name="paroles" id="paroles"></textarea><br />
     <select name="categorie">
	<?php 
	$sql = 'SELECT cate_title FROM categories'; 
	$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
	while($data = mysql_fetch_assoc($req)) 
	    { 
	    echo '<option>'.$data['cate_title'].'</option>';
	    }
	mysql_close(); 
	?> 
     </select>
     <input type="submit" name="submit" value="Envoyer" />
</form>
