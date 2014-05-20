<?php
/**
 * Open external links in a new window.
 */

/**
 * Inits the plugin
 * 
 * @return void
 */
function target_blank_init() {
	// extend js
	elgg_extend_view("js/elgg", "js/target_blank");
}

elgg_register_event_handler('init', 'system', 'target_blank_init');