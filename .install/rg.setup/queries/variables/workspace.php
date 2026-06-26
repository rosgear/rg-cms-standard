<?php
/**
 * Идентфикаторы (переменные) запроса.
 * 
 * Веб-приложение «RosGear: Рабочее пространство» (RG Workspace).
 * 
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    // идентфикаторы модулей
    'modules' => [
        'rg.be.terms',
        'rg.be.workspace',
        'rg.be.menu',
        'rg.be.dashboard',
        'rg.be.traybar',
        'rg.be.partitionbar',
        'rg.be.recovery',
        'rg.be.signin',
        'rg.be.users',
        'rg.be.user_roles',
        'rg.be.templates',
        'rg.be.languages',
        'rg.be.mp',
        'rg.be.config',
        'rg.be.guide',
        'rg.be.audit_log',
        'rg.be.debug_toolbar',
        'rg.be.error_report',
        'rg.be.task',
        'rg.be.references',
        'rg.be.filemanager',
        'rg.fe.api'
    ],
    // идентфикаторы расширений модулей
    'extensions' => [
        'rg.be.config.desk',
        'rg.be.config.api_routes',
        'rg.be.config.autorun',
        'rg.be.config.cache',
        'rg.be.config.datetime',
        'rg.be.config.defense',
        'rg.be.config.ipblacklist',
        'rg.be.config.ipblocklist',
        'rg.be.config.ipwhitelist',
        'rg.be.config.license',
        'rg.be.config.logger',
        'rg.be.config.mail',
        'rg.be.config.services',
        'rg.be.config.session',
        'rg.be.config.timezone',
        'rg.be.config.upload',
        'rg.be.config.url',
        'rg.be.config.version',
        'rg.be.config.wspace',
        'rg.be.config.audit',
        'rg.be.mp.desk',
        'rg.be.mp.catalog',
        'rg.be.mp.mmanager',
        'rg.be.mp.emanager',
        'rg.be.mp.wmanager',
        'rg.be.mp.pmanager',
        'rg.be.mp.themes',
        'rg.be.references.desk',
        'rg.be.references.elements',
        'rg.be.references.properties',
        'rg.be.config.page'
    ],
    // идентфикаторы виджетов
    'widgets' => [
        'rg.ds.shortcuts',
        'rg.ds.version',
        'rg.ds.license',
        'rg.wd.codemirror',
        'rg.wd.tinymce',
        'rg.wd.kcaptcha'
    ],
    // идентфикаторы плагинов
    'plugins' => [],
    // идентфикаторы элементов Панели разделов
    'partitionbar' => [
        'guide', 
        'settings', 
        'users', 
        'region',
        'logging',
        'debug',
        'workspace',
        'system',
        'appearance',
        'tools',
        'defense',
        'other',
        'marketplace'
    ],
    // информационная панель
    'dashboards' => [
        'desktop'
    ],
    // панель уведомлений
    'traybar' => [
        'audit',
        'debugger',
        'dashboard',
        'exit'
    ],
    // идентфикаторы ролей пользователей
    'roles' => [
        'root'
    ]
];
