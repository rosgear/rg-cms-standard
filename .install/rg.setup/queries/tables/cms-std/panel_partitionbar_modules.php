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
        'partition_id' => $partitionbar['site'], 
        'module_id'    => $modules['rg.be.site_menu']
    ],
    [
        'partition_id' => $partitionbar['site'], 
        'module_id'    => $modules['rg.be.site_markup']
    ],
    [
        'partition_id' => $partitionbar['site'], 
        'module_id'    => $modules['rg.be.media_gallery']
    ],
    [
        'partition_id' => $partitionbar['site'], 
        'module_id'    => $modules['rg.be.rss_feeds']
    ],
    [
        'partition_id' => $partitionbar['site'], 
        'module_id'    => $modules['rg.be.tags']
    ]
];