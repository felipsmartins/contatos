<?php 

return [

	# CONTROLLERS
	'controllers' => [
		'invokables' => [
			'Contatos\Controller\Contatos' => 'Contatos\Controller\ContatosController',
		]
	], 

	# ROTAS
	'router' => [
		'routes' => [
			'contatos-home' => [
				'type' => 'Literal',
				'options' => [
					'route' => '/contatos',
					'defaults' => [
						'controller' => 'Contatos\Controller\Contatos',
						'action' => 'list'
					]
				]
			]
		]
	],

	# VIEW
	'view_manager' => [
		'template_path_stack' => [
            __DIR__ . '/../view',
        ],
		
	],

	# SERVICES

	'service_manager' => [
		'invokables' => [
			'exporter' => 'Contatos\Service\Exporter\Exporter'
		]
	],

	
];