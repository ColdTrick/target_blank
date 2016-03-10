<?php

$plugin = elgg_extract('entity', $vars);

echo elgg_format_element('label', [], elgg_echo('target_blank:settings:link_suffix'));
echo elgg_view('input/text', [
	'name' => 'params[link_suffix]',
	'value' => $plugin->link_suffix,
]);
echo elgg_format_element('div', ['class' => 'elgg-subtext'], elgg_echo('target_blank:settings:link_suffix:info'));