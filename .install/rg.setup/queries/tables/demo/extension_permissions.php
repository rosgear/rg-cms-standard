<?php
/**
 * Файл записей таблицы "{{extension_permissions}}" (Права доступа к расширениям модулей).
 * 
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    // доступ к панели справочников для роли "Редактор"
    [
        'extension_id' => $extensions['rg.be.references.desk'],
        'role_id'      => $roles['editor'],
        'permissions'  => 'any'
    ],
    // доступ к панели конфигурации для роли "Редактор"
    [
        'extension_id' => $extensions['rg.be.config.desk'],
        'role_id'      => $roles['editor'],
        'permissions'  => 'any'
    ],
    // доступ к настройке страницы для роли "Редактор"
    [
        'extension_id' => $extensions['rg.be.config.page'],
        'role_id'      => $roles['editor'],
        'permissions'  => 'any'
    ],
    // доступ к версии веб-приложения для роли "Редактор"
    [
        'extension_id' => $extensions['rg.be.config.version'],
        'role_id'      => $roles['editor'],
        'permissions'  => 'any'
    ]
];