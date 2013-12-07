
<div class="ajout_bannière">

    <p id="texte_ajout">Créer votre propre comptine et mettez la en ligne sur notre site</p>

</div>


<form method="POST" action="index.php?action=addMovie" enctype="multipart/form-data">

    <label>Titre : </label>
    <p>
        <input type="text" name="titre" id="titre" />
    </p>

    <label>Auteur : </label>
    <p>
        <input type="text" name="auteur" id="auteur" />
    </p>

    <label>Catégorie : </label>
    <select name="categorie">sélectionnez une catégorie
    <?php
    foreach ($categories as $cat)
    {
        echo '<option>'.$cat['cate_title'].'</option>';
    }
    ?>
    </select>

    <label for='Video'>Ajouter une video</label>
    <p>
        <input class="fichier"type="file" name="video"  />
    </p>

    <label>Ajouter les paroles : </label>
    <p>
        <textarea rows="2" cols="50" name="paroles" ></textarea>
    </p>

    <p>
        <input class="boutton" type="submit" value="Publier"/>
    </p>
</form>
