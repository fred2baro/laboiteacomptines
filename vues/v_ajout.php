<!--Bloc de description de la page d'ajout-->
		<article class="ajout_bannière">

			<p id="texte_ajout">Créer votre propre comptine et mettez la en ligne sur notre site !</p>
			
		</article>
		
<!--Fin du bandeau de description-->		



<!--Bloc du formulaire pour upload une vidéo-->
		
			
			<form method="POST" action="index.php?action=addMovie" enctype="multipart/form-data">
				
				<div id="ajout_input">
				
							
					<label >Titre : </label>
					
						<p>
							<input type="text" name="titre" id="titre" class="input"/>
						</p>
							
					<label>Auteur : </label>
					
						<p>
							<input type="text" name="auteur" id="auteur" class="input"/>
						</p>
					
					<label>Type : </label>
					
						<p>

							<select name="categorie" class="input" id="type">
                                <option>sélectionnez une catégorie</option>
                                
                                <?php
                                foreach ($categories as $cat)
                                {
                                    echo '<option>'.$cat['cate_title'].'</option>';
                                }
                                ?>
                            </select>
						</p>
								
					<label for='Video' id="vidéo">Ajouter une video :</label>
						
						<p>
							<div id="ajout_fichier">
								<input class="fichier" type="file" name="video" id="fichier"/>
								<h3>choissez un fichier</h3>
							</div>
						</p>
				
				</div>
				
				
				<div id="ajout_parole">
					
					<label>Paroles : </label>
						<p>
							<textarea rows="2" cols="50" name="paroles" ></textarea>
						</p>
				
				</div>	
				
				
						<p>
							
								<input id="button" class="boutton" type="submit" value="Mettez en ligne votre comptine"/>
							
						</p>
				
				
			</form>

<!--Fin du bloc de formulaire-->
