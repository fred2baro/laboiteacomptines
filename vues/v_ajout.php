<?php

include("lib/bdd.php");

?>		



<div class="formulaire">

	<h2>Ajoutez vos comptines</h2>
		<form method="POST" action="upload/upload.php" enctype="multipart/form-data"">	
		
	
			<label for='Video'>Ajouter une video</label>
				
				<p>
					<input class="fichier"type="file" name="video"  />
				</p>
				
			<label>Nom de l'auteur :</label>
				<p>
					<input type="text" name="titre" id="titre" />
				</p>

			<label>Titre de la comptine : </label>
				<p>
					<input type="text" name="titre" id="titre" />
				</p>
				
			<label>Ajouter les paroles : </label>
				<p>
					<textarea rows="2" cols="50" name="paroles" ></textarea>
				</p>

			<label>Choisissez la categorie</label>
				<p>
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
				</p>
				
				<p>

					<input class="boutton" type="submit" value="Publier"/>
				</p>
		</form>
		</div>
