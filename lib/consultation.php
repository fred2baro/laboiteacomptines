<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://api.dmcdn.net/all.js"></script>
<script>
DM.init({apiKey: 'adc44dde580413f364b8', status: true, cookie: true});

videoId = '<?php echo $_GET['idDly']; ?>';
console.log(videoId);
DM.api('/video/' + videoId, {fields: "title,description,tags,views_total,ratings_total"}, function(response)
{
	$('#infos').append('<h1>' + response.title + '</h1>');
	$('#infos2').append(response.description);
	$('#infos3').append(response.tags);
	$('#infos4').append(response.views_total);
	bonus(0);

});
</script>
<script>
function bonus(val){
	
	$(function () {
  		$.ajax({
    		url : "bonus.php",
		    type: "POST",
		    data : {like : videoId,valeur : val},
		    success: function(data, textStatus, jqXHR)
		    	{
		    	$('#infos5').html("Notes : "+data);
		        console.log(data);
		        console.log(jqXHR);
		        console.log(textStatus)
		    	},
		    error: function (jqXHR, textStatus, errorThrown)
		    	{
		 
		    	}
			});
  		
	});
}
</script>

</head>

	<body>
	<div id="infos">
	</div>
<iframe frameborder="0" width="600" height="430" src="http://www.dailymotion.com/embed/video/<?php echo $_GET['idDly'];?>"></iframe><br />
	<div id="infos2">
	</div>		     
	<div id="infos3">
	Tags : 
	</div> 
	<div id="infos4">
	Nombre de vues totales :
	</div>
	<div class="bonus" id="infos5">
	Notes : </div> 
	<a href="#" onclick="bonus(1);" ><img src="http://blugture.net/comptines/images/bonus.png" ></a>
	

	</body>
</html>