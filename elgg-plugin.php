<?php

use ColdTrick\TargetBlank\Bootstrap;
use Elgg\Router\Middleware\AdminGatekeeper;

return [
	'plugin' => [
		'version' => '9.0.1',
	],
	'bootstrap' => Bootstrap::class,
	'events' => [
		'config' => [
			'htmlawed' => [
				'\ColdTrick\TargetBlank\HTMLawed::denyTargetAttribute' => [],
			],
		],
		'elgg.data' => [
			'site' => [
				'\ColdTrick\TargetBlank\Javascript::setLinkSuffix' => [],
			],
		],
		'setting' => [
			'plugin' => [
				'\ColdTrick\TargetBlank\PluginSettings::saveLinkSuffix' => [],
			],
		],
	],
	'routes' => [
		'target_blank:test' => [
			'path' => '/target_blank/test',
			'resource' => 'target_blank/test',
			'middleware' => [
				AdminGatekeeper::class,
			],
		],
	],
];
