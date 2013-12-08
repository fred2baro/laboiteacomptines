<iframe frameborder="0" id="consultation" width="600" height="430" src="http://www.dailymotion.com/embed/video/<?php echo $video['id_daily'];?>?logo=0&startscreen=html&html"></iframe><br />
<article>
	
    <p id="auteur">

        par <strong><?php echo $video["vide_created_by"]; ?></strong>
        
    </p>

    <h1>Paroles de la comptine</h1> 
    
    <p id="paroles">
		
		<center><?php echo nl2br($video["vide_paroles"]); ?></center>
		
    </p>

    <div id="disqus_thread"></div>
    
		<script type="text/javascript">
			
			/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
			var disqus_shortname = 'laboiteacomptines'; // required: replace example with your forum shortname

			/* * * DON'T EDIT BELOW THIS LINE * * */
			(function() {
				var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
				dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
				(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
			})();
		</script>
		
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

</article>
		
