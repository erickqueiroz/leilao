<?php
namespace Main;

use Laminas\Router\Http\Segment;
use Main\Controller\MainController;

return [
    'router' => [
        'routes' => [
            'main' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/',
                    'defaults' => [
                        'controller' => MainController::class,
                        'action' => 'index',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [],
            ],
            'lance' => [
                'type' => Segment::class,
                'public' => true,
                'options' => [
                    'route' => '/lance[/:idToken]',
                    'constraints' => [
                        'idToken' => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => MainController::class,
                        'action' => 'lance',
                    ],
                ],
            ],
            'ends' => [
                'type' => Segment::class,
                'public' => true,
                'options' => [
                    'route' => '/ends',
                    'constraints' => [
                        'idToken' => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => MainController::class,
                        'action' => 'ends',
                    ],
                ],
            ],
        ],
    ],

    'controllers' => [
        'invokables' => [],
    ],

    'view_manager' => [
        'template_map' => [
            'layout/main' => __DIR__ . '/../view/main/main/site.phtml'
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
