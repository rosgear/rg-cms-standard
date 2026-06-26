<?php
/**
 * Файл записей таблицы "{{module_permissions}}" (Права доступа к модулям).
 * 
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    // доступ к панели уведомлений для роли "Редактор"
    [
        'module_id'   => $modules['rg.be.traybar'],
        'role_id'     => $roles['editor'],
        'permissions' => 'interface'
    ],
    // доступ к панели разделов для роли "Редактор"
    [
        'module_id'   => $modules['rg.be.partitionbar'],
        'role_id'     => $roles['editor'],
        'permissions' => 'interface'
    ],
    // доступ к главному меню для роли "Редактор"
    [
        'module_id'   => $modules['rg.be.menu'],
        'role_id'     => $roles['editor'],
        'permissions' => 'interface'
    ],
    // доступ к справочной информации компонентов для роли "Редактор"
    [
        'module_id'   => $modules['rg.be.guide'],
        'role_id'     => $roles['editor'],
        'permissions' => 'any'
    ],
    // доступ к справочникам для роли "Редактор"
    [
        'module_id'   => $modules['rg.be.references'],
        'role_id'     => $roles['editor'],
        'permissions' => 'any,extension'
    ],
    // доступ к конфигурации для роли "Редактор"
    [
        'module_id'   => $modules['rg.be.config'],
        'role_id'     => $roles['editor'],
        'permissions' => 'any,extension'
    ],
    // доступ к виджетам инфор-й панели для роли "Редактор"
    [
        'module_id'   => $modules['rg.be.dashboard'],
        'role_id'     => $roles['editor'],
        'permissions' => 'read'
    ],
    // доступ пользователя к своему аккаунту для роли "Редактор"
    [
        'module_id'   => $modules['rg.be.users'],
        'role_id'     => $roles['editor'],
        'permissions' => 'account'
    ],
    // доступ пользователя к языками для роли "Редактор"
    [
        'module_id'   => $modules['rg.be.languages'],
        'role_id'     => $roles['editor'],
        'permissions' => 'read'
    ],

    // доступ пользователя к модулям веб-приложения
    [
        'module_id'   => $modules['rg.be.articles'],
        'role_id'     => $roles['editor'],
        'permissions' => 'any'
    ],
    [
        'module_id'   => $modules['rg.be.article_categories'],
        'role_id'     => $roles['editor'],
        'permissions' => 'any'
    ],
    [
        'module_id'   => $modules['rg.fe.sitemap'],
        'role_id'     => $roles['editor'],
        'permissions' => 'settings'
    ],

    // доступ пользователя к модулям редакции
    [
        'module_id'   => $modules['rg.be.site_menu'],
        'role_id'     => $roles['editor'],
        'permissions' => 'any'
    ],
    [
        'module_id'   => $modules['rg.be.site_markup'],
        'role_id'     => $roles['editor'],
        'permissions' => 'any'
    ],
    [
        'module_id'   => $modules['rg.be.mediafiles'],
        'role_id'     => $roles['editor'],
        'permissions' => 'any'
    ],
    [
        'module_id'   => $modules['rg.be.media_gallery'],
        'role_id'     => $roles['editor'],
        'permissions' => 'any'
    ],
    [
        'module_id'   => $modules['rg.be.rss_feeds'],
        'role_id'     => $roles['editor'],
        'permissions' => 'any'
    ],
    [
        'module_id'   => $modules['rg.be.tags'],
        'role_id'     => $roles['editor'],
        'permissions' => 'any'
    ]
];
