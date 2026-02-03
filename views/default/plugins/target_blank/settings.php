<?php

$plugin = elgg_extract('entity', $vars);

echo elgg_view_field([
	'#type' => 'text',
	'#label' => elgg_echo('target_blank:settings:link_suffix'),
	'#help' => elgg_echo('target_blank:settings:link_suffix:info'),
	'name' => 'params[link_suffix]',
	'value' => $plugin->link_suffix,
]);

echo elgg_view_field([
	'#type' => 'plaintext',
	'#label' => elgg_echo('target_blank:settings:whitelist'),
	'#help' => elgg_echo('target_blank:settings:whitelist:help'),
	'name' => 'params[whitelist]',
	'value' => $plugin->whitelist,
]);

echo elgg_view_field([
	'#type' => 'hidden',
	'name' => 'flush_cache',
	'value' => 1,
]);
