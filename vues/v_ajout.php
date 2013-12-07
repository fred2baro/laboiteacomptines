<?php

include("lib/bdd.php");

?>		



<div class="ajout_bannière">

	<p id="texte_ajout">Créer votre propre comptine et mettez la en ligne sur notre site</p>
	
</div>
		
		
		<form method="POST" action="upload/upload.php" enctype="multipart/form-data">
			
			<label>Titre : </label>
				<p>
					<input type="text" name="titre" id="titre" />
				</p>
					
			<label>Auteur : </label>
				<p>
					<input type="text" name="titre" id="titre" />
				</p>
			
			<label>Type : </label>
				<p>
					<select name="categorie">sélectionnez une catégorie</select>
				</p>
						
			<label for='Video'>Ajouter une video</label>
				<p>
					<input class="fichier"type="file" name="video"  />
				</p>
				
			<label>Ajouter les paroles : </label>
				<p>
					<textarea rows="2" cols="50" name="paroles" ></textarea>
				</p>

			
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
