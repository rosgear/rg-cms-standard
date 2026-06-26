<?php
/**
 * Панель управления.
 * 
 * Файл записей таблицы "{{panel_dashboard_roles}}" (Доступ к рабочим столам Информационной панели).
 * 
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    [
        'panel_id' => $dashboards['site'], 
        'role_id'  => $roles['root']
    ],
    [
        'panel_id' => $dashboards['site'], 
        'role_id'  => $roles['editor']
    ]
];