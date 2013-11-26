<h1>Vos comptines</h1>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://api.dmcdn.net/all.js"></script>
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
  <?php
$key = $_POST["keyword"];
$cat = $_GET["cat"];
//echo "Post : ".$cat;
echo "<input type='hidden' id='test' value='$key'/>";
echo "<input type='hidden' id='categorie' value='$cat'/>";


	?>
<script>
  
    DM.init({
        apiKey: 'adc44dde580413f364b8',
        status: true, // check login status
        cookie: true // enable cookies to allow the server to access the session
    });
  
var keyword ;
var categorie ;
  
          var hv = $('#test').val();
          if ($('#categorie').val() == ""){
        	//alert("categorie vide");
          DM.api('/videos?fields=thumbnail_120_url&owner=x1cg78q&search='+$('#test').val(), {fields: "title,id,thumbnail_120_url,views_total"}, function(response)
                  {
                  var text = "";
                  var textComplet = "";
                      var auteur = "owner.screenname";
                      for(i=0;i<response.list.length;i++)
                      {
						text = '<ul class="list_resultat">';
						text +=		'<li>';
						text +=			'<a href="index.php?uc=rechercher&action=consulter&idDly=' + response.list[i].id +'">';
						text +=				'<img src="'+ response.list[i].thumbnail_120_url + '" id="video"/>';
						text +=					'<div class="resultats">';
						text +=						'<h2>' + response.list[i].title +' </h2>';
						text +=							'</a>';
						text +=								'<p>';
						text +=								'Publié le : 23/11/2013 ';
						text +=								'<p id="auteur_'+response.list[i].id+'" style="align:left;">'+infos(response.list[i].id)+'</p>';
						text +=								'<p id="vues" style="align:left;"> '+response.list[i].views_total+' vues </p>';
						text +=							'</p>';
						text +=						'</div>';
						text +=				'<img src="" alt="" id="like"/>';	
						text +=		'</li>';
						text +=	'</ul>';
													  
						$('#list').append(text);
						textComplet += text;
						textComplet +=',';                         
					 }  
													 
				});
			}
			else
			{
				var hv = $('#categorie').val();
			//alert("Categorie : "+hv);
          DM.api('/videos?fields=thumbnail_120_url&owner=x1cg78q&tags='+hv, {fields: "title,id,thumbnail_120_url,views_total"}, function(response)
                  {
                  var text = "";
                  var textComplet = "";
                      for(i=0;i<response.list.length;i++)
                      {
						text = '<ul class="list_resultat">';
						text +=		'<li>';
						text +=			'<a href="index.php?uc=rechercher&action=consulter&idDly=' + response.list[i].id +'">';
						text +=				'<img src="'+ response.list[i].thumbnail_120_url + '" id="video"/>';
						text +=					'<div class="resultats">';
						text +=						'<h2>' + response.list[i].title +' </h2>';
						text +=							'</a>';
						text +=								'<p>';
						text +=								'Publié le : 23/11/2013 ';
						text +=								'<p id="auteur_'+response.list[i].id+'">'+infos(response.list[i].id)+'</p>';
						text +=								'<p id="vues" style="align:left;"> '+response.list[i].views_total+' vues </p>';
						text +=							'</p>';
						text +=						'</div>';
						text +=				'<img src="" alt="" id="like"/>';	
						text +=		'</li>';
						text +=	'</ul>';
													  
						$('#list').append(text);
						textComplet += text;
						textComplet +=',';                         
					 }  
													 
				});				
			}
</script>
<div id = "list">
</div>

	