<?php
/**
 * Файл конфигурации маршрутизатора запросов.
 * 
 * Здесь перечисляются параметры маршрутизации модулей,
 * которые поставляются непосредственно с фреймворком и обеспечивают работоспособность 
 * панели управления GePanel.
 * 
 * Маршрутизация модулей (backend) добавленных через Панель управления GePanel, будут в файле 
 * конфигурации ".router.so" (включая маршрутизацию модулей перечисленных ниже).
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    /** Префиксы маршрутизации модулей */
    /*
     * Префикс состоит из пары (имя - маршрут).
     * Сюда приложение автоматически добавит префикс "backend", как базовый 
     * маршрут к Панели управления GePanel.
     */
    'prefixes' => [],

    /** Параметры маршрутизации модулей */
    'routes' => [
        /*
         * Модуль "Планировщик заданий".
         */
        'rg.be.task' => [
            'type'    => 'literal',
            'options' => [
                'module'   => 'rg.be.task',
                'route'    => 'task',
                'prefix'   => BACKEND,
                'defaults' => ['action' => 'status']
            ]
        ],

        /*
         * Модуль "Авторизация в панели управления".
         */
        'rg.be.signin.index' => [
            'type'    => 'literal',
            'options' => [
                'module' => 'rg.be.signin',
                'route'  => '/',
                'prefix' => BACKEND
            ]
        ],
        'rg.be.signin' => [
            'type'    => 'crudSegments',
            'options' => [
                'module'      => 'rg.be.signin',
                'route'       => 'signin',
                'prefix'      => BACKEND,
                'childRoutes' => [
                    'verify' => [
                        'route'    => 'verify',
                        'defaults' => ['action' => 'verify']
                    ]
                ]
            ]
        ],

        /*
         * Модуль "Рабочее пространство".
         */
        'rg.be.workspace' => [
            'type'    => 'crudSegments',
            'options' => [
                'module'      => 'rg.be.workspace',
                'route'       => 'workspace',
                'prefix'      => BACKEND,
                'childRoutes' => [
                    'data' => [
                        'route'    => 'data',
                        'defaults' => ['action' => 'data']
                    ],
                    'ctree' => [
                        'route'    => 'widgetstree',
                        'defaults' => ['controller' => 'Navigation\WidgetsTree']
                    ]
                ]
            ]
        ],

        /*
         * Модуль "Журнал аудита действий пользователей".
         */
        'rg.be.audit_log' => [
            'type'    => 'crudSegments',
            'options' => [
                  'module'      => 'rg.be.audit_log',
                  'route'       => 'audit-log',
                  'prefix'      => BACKEND,
                  'constraints' => ['id'],
                  'defaults'    => [
                      'controller' => 'Grid'
                  ]
            ]
        ]
    ]
];
