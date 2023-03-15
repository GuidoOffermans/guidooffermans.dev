<?php

return [
	'fieldsets' => [
		'text'  => [
			'label'     => 'Text',
			'type'      => 'group',
			'fieldsets' => [
				'text',
				'heading',
				'list'
			]
		],
		'media' => [
			'label'     => 'Media',
			'type'      => 'group',
			'fieldsets' => [
				'image',
				'video'
			]
		],
		'code'  => [
			'label'     => 'Code',
			'type'      => 'group',
			'fieldsets' => [
				'code',
				'markdown'
			]
		]
	]
];
