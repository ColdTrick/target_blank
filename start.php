<?php 

	function target_blank_init(){
		// extend js
		elgg_extend_view("js/initialise_elgg", "target_blank/js");
	}

	register_elgg_event_handler('init', 'system', 'target_blank_init');
?>