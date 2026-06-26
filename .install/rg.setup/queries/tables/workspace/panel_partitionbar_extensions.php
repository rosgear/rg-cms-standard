<?php
/**
 * Панель управления.
 * 
 * Файл записей таблицы "{{panel_partitionbar_extensions}}" (Расширения модулей Панели разделов).
 * 
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    [
        'partition_id' => $partitionbar['logging'],
        'extension_id' => $extensions['rg.be.config.logger']
    ],
    [
        'partition_id' => $partitionbar['logging'],
        'extension_id' => $extensions['rg.be.config.audit']
    ],
    [
        'partition_id' => $partitionbar['workspace'], 
        'extension_id' => $extensions['rg.be.config.wspace']
    ],
    [
        'partition_id' => $partitionbar['region'], 
        'extension_id' => $extensions['rg.be.config.timezone']
    ],
    [
        'partition_id' => $partitionbar['region'], 
        'extension_id' => $extensions['rg.be.config.datetime']
    ],
    [
        'partition_id' => $partitionbar['appearance'], 
        'extension_id' => $extensions['rg.be.mp.themes']
    ],
    [
        'partition_id' => $partitionbar['system'], 
        'extension_id' => $extensions['rg.be.config.api_routes']
    ],
    [
        'partition_id' => $partitionbar['system'], 
        'extension_id' => $extensions['rg.be.config.services']
    ],
    [
        'partition_id' => $partitionbar['system'], 
        'extension_id' => $extensions['rg.be.config.license']
    ],
    [
        'partition_id' => $partitionbar['system'], 
        'extension_id' => $extensions['rg.be.config.cache']
    ],
    [
        'partition_id' => $partitionbar['system'], 
        'extension_id' => $extensions['rg.be.config.mail']
    ],
    [
        'partition_id' => $partitionbar['system'], 
        'extension_id' => $extensions['rg.be.config.session']
    ],
    [
        'partition_id' => $partitionbar['system'], 
        'extension_id' => $extensions['rg.be.config.upload']
    ],
    [
        'partition_id' => $partitionbar['system'], 
        'extension_id' => $extensions['rg.be.config.url']
    ],
    [
        'partition_id' => $partitionbar['defense'], 
        'extension_id' => $extensions['rg.be.config.ipblocklist']
    ],
    [
        'partition_id' => $partitionbar['defense'], 
        'extension_id' => $extensions['rg.be.config.ipblacklist']
    ],
    [
        'partition_id' => $partitionbar['defense'],  
        'extension_id' => $extensions['rg.be.config.defense']
    ],
    [
        'partition_id' => $partitionbar['defense'], 
        'extension_id' => $extensions['rg.be.config.ipwhitelist']
    ],
    [
        'partition_id' => $partitionbar['marketplace'], 
        'extension_id' => $extensions['rg.be.mp.catalog']
    ],
    [
        'partition_id' => $partitionbar['marketplace'], 
        'extension_id' => $extensions['rg.be.mp.mmanager']
    ],
    [
        'partition_id' => $partitionbar['marketplace'],  
        'extension_id' => $extensions['rg.be.mp.emanager']
    ],
    [
        'partition_id' => $partitionbar['marketplace'], 
        'extension_id' => $extensions['rg.be.mp.wmanager']
    ],
    [
        'partition_id' => $partitionbar['marketplace'], 
        'extension_id' => $extensions['rg.be.mp.pmanager']
    ],
    [
        'partition_id' => $partitionbar['marketplace'], 
        'extension_id' => $extensions['rg.be.mp.themes']
    ],
    [
        'partition_id' => $partitionbar['system'], 
        'extension_id' => $extensions['rg.be.config.page']
    ]
];