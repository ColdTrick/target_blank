<?php
/*$external_links = $('a[href^="http://"],a[href^="https://"]').not('[target], [href^="<?php echo $vars["url"];?>"]');*/ 
?>
$(document).ready(function(){
	$external_links = $('a[href^="http://"]:not([target], [href^="<?php echo $vars["url"];?>"]), a[href^="https://"]:not([target], [href^="<?php echo $vars["url"];?>"])');
	
	$external_links.live("click", function(){
		$(this).attr("target", "_blank");
	});
});