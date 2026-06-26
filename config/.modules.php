<?php
/**
 * Файл конфигурации модулей.
 * 
 * Здесь перечисляются модули (backend, frontend) с их параметрами конфигурации, только те, 
 * которые поставляются непосредственно с фреймворком и обеспечивают работоспособность приложения.
 * 
 * Модули добавленные через Панель управления GePanel, будут в файле 
 * конфигурации ".modules.so" (включая модули перечисленные ниже).
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */
 
return [
    /**
     * Модуль "Веб-сайт".
     */
    'rg.fe.site' => [
        'namespace' => 'Rg\Frontend\Site',
        'path'      => '/rg/rg.fe.site'
    ],

    /**
     * Модуль "Авторизация в Панели управления".
     */
    'rg.be.signin' => [
        'namespace' => 'Rg\Backend\Signin',
        'path'      => '/rg/rg.be.signin'
    ],

    /**
     * Модуль "Выход из Панели управления".
     */
    'rg.be.signout' => [
        'namespace' => 'Rg\Backend\Signout',
        'path'      => '/rg/rg.be.signout'
    ],

    /**
     * Модуль "Системные задачи".
     */
    'rg.be.task' => [
        'namespace' => 'Rg\Backend\Task',
        'path'      => '/rg/rg.be.task'
    ],

    /**
     * Модуль "Рабочее пространство".
     */
    'rg.be.workspace' => [
        'namespace' => 'Rg\Backend\Workspace',
        'path'      => '/rg/rg.be.workspace'
    ]
];
