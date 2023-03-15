<?php

return [
	'panel'  => [
		'install' => env('KIRBY_PANEL_INSTALL', false),
		'slug'    => env('KIRBY_PANEL_SLUG', 'panel'),
	],
	'debug'  => env('KIRBY_DEBUG', false),
	'blocks' => require_once 'blocks.php',
	'api'    => [
		'basicAuth'     => env('KIRBY_API_BASIC_AUTH', false),
		'allowInsecure' => env('KIRBY_API_ALLOW_INSECURE', false)
	]
];
