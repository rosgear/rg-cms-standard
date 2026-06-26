<?php
/**
 * Панель управления.
 * 
 * Файл записей таблицы "{{panel_partitionbar_modules}}" (Модули Панели разделов).
 * 
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    [
        'partition_id' => $partitionbar['system'], 
        'module_id'    => $modules['rg.be.references']
    ],
    [
        'partition_id' => $partitionbar['system'], 
        'module_id'    => $modules['rg.be.terms']
    ],
    [
        'partition_id' => $partitionbar['appearance'], 
        'module_id'    => $modules['rg.be.templates']
    ],
    [
        'partition_id' => $partitionbar['guide'], 
        'module_id'    => $modules['rg.be.guide']
    ],
    [
        'partition_id' => $partitionbar['users'], 
        'module_id'    => $modules['rg.be.users']
    ],
    [
        'partition_id' => $partitionbar['users'], 
        'module_id'    => $modules['rg.be.user_roles']
    ],
    [
        'partition_id' => $partitionbar['region'], 
        'module_id'    => $modules['rg.be.languages']
    ],
    [
        'partition_id' => $partitionbar['logging'], 
        'module_id'    => $modules['rg.be.audit_log']
    ],
    [
        'partition_id' => $partitionbar['debug'], 
        'module_id'    => $modules['rg.be.debug_toolbar']
    ],
    [
        'partition_id' => $partitionbar['workspace'], 
        'module_id'    => $modules['rg.be.partitionbar']
    ],
    [
        'partition_id' => $partitionbar['workspace'], 
        'module_id'    => $modules['rg.be.traybar']
    ],
    [
        'partition_id' => $partitionbar['workspace'], 
        'module_id'    => $modules['rg.be.menu']
    ],
    [
        'partition_id' => $partitionbar['tools'], 
        'module_id'    => $modules['rg.be.filemanager']
    ]
];