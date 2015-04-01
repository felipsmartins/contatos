<?php
namespace Contatos\config;

return [

    # CONTROLLERS
    'controllers' => [
        'invokables' => [
            'Contatos.Controller.Contatos' => 'Contatos\Controller\ContatosController',
        ],
    ],

    # ROTAS
    'router' => [
        'routes' => [
            'contatos' => [
                'type' => 'segment',
                'options' => [
                    'route' => '/contatos[/:action][/:id]',
                    'constraints' => [
                        'id' => '[0-9]+',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ],
                    'defaults' => [
                        'controller' => 'Contatos.Controller.Contatos',
                        'action' => 'list',
                    ],
                ],
            ],
        ],
    ],

    # VIEW
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'template_map' => [
            'layout/layout'    => __DIR__.'/../view/layout/layout.phtml',
        ],
        'template_path_stack' => [
            __DIR__.'/../view',
        ],
    ],

    # SERVICES
    'service_manager' => [
        'invokables' => [
            'exporter' => 'Contatos\Service\Exporter\Exporter',
        ],
    ],
];
