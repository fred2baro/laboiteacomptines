<script>
DM.init({apiKey: 'adc44dde580413f364b8', status: true, cookie: true});

videoId = '<?php echo $_REQUEST['idDly']; ?>';
console.log(videoId);
DM.api('/video/' + videoId, {fields: "title,description,ratings_total"}, function(response)
{
	$('#titre').append('<h1>' + response.title + '</h1>');
	$('#description').append(response.description);
	
	bonus(0);

});
</script>
<script>
function bonus(val){
	
	$(function () {
  		$.ajax({
    		url : "http://blugture.net/comptines/lib/bonus.php",
		    type: "POST",
		    data : {like : videoId,valeur : val},
		    success: function(data, textStatus, jqXHR)
		    	{
		    	$('#likz').html("Notes : "+data);
		    	},
		    error: function (jqXHR, textStatus, errorThrown)
		    	{
		 
		    	}
			});
  		
	});
}
</script>
	<h1><div id="titre">
	<?php
	include("lib/bdd.php");
	$id = $_REQUEST["idDly"];
	$sql = "SELECT * from videos WHERE id_daily = '$id'";
	$query = mysql_query($sql);
	$line = mysql_fetch_assoc($query);
	?>
	</div></h1>
	<div id="vues"></div>
	<iframe frameborder="0" id="consultation" width="600" height="430" src="http://www.dailymotion.com/embed/video/<?php echo $_GET['idDly'];?>"></iframe><br />
		<article>
				<p id="auteur">
					Publiée le <?php echo $line["vide_created_at"]; ?></br>
					par <strong><?php echo $line["vide_created_by"]; ?></strong>
				</p>
			<div class="bonus" id="likz">
	Votes : </div> 
	<a href="#likz" onclick="bonus(1);" ><img src="http://blugture.net/comptines/images/bonus.png" id="bonus_img"></a>
			<p id="paroles">
				<h1>Paroles de la comptine</h1>  <br /><?php echo nl2br($line["vide_paroles"]); ?>
			<p>
			<form>
				<label>Commentaires</label>
					<p>
						<textarea>Super chanson ! C'est toute mon enfance</textarea>
					</p>
			</form>
			<p><div id="description">
				<!--ceci sont les commentaires deja posté -->
				</div>
				
				
			</p>
		</article>
		