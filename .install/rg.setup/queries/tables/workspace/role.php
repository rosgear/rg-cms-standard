<?php
/**
 * Файл записей таблицы "{{role}}" Роли пользователей.
 * 
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    [
        'id'            => $roles['root'],
        'name'          => $installer->t('Super administrator'),
        'shortname'     => 'root',
        'description'   => $installer->t('Super admins'),
        '_created_date' => gmdate('Y-m-d H:i:s'),
        '_created_user' => 1,
        '_lock'         => 1
    ]
];