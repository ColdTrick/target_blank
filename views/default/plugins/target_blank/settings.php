<?php

$plugin = elgg_extract('entity', $vars);

echo elgg_view_field([
	'#type' => 'text',
	'#label' => elgg_echo('target_blank:settings:link_suffix'),
	'#help' => elgg_echo('target_blank:settings:link_suffix:info'),
	'name' => 'params[link_suffix]',
	'value' => $plugin->link_suffix,
]);
