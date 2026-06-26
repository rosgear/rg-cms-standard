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
        'module_id'    => $modules['rg.be.articles']
    ],
    [
        'partition_id' => $partitionbar['site'], 
        'module_id'    => $modules['rg.be.article_categories']
    ],
    [
        'partition_id' => $partitionbar['site'], 
        'module_id'    => $modules['rg.be.mediafiles']
    ]
];
