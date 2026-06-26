<?php
/**
 * Панель управления.
 * 
 * Файл записей таблицы "{{panel_dashboard_widgets}}" (Виджеты на информационных панелях).
 * 
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

use Ge\Helper\Json;

return [
    [
        'widget_id' => $widgets['rg.ds.shortcuts'],
        'panel_id'  => $dashboards['desktop'],
        'column'    => 1,
        'index'     => 1,
        'options'   => Json::encode([
            'showModules'     => true,
            'showExtensions'  => true,
            'showTitle'       => true, 
            'showDescription' => true,
            'showSmall'       => false,
            'modules'         => [
                $modules['rg.be.traybar']       => true, 
                $modules['rg.be.partitionbar']  => true,  
                $modules['rg.be.users']         => true,  
                $modules['rg.be.user_roles']    => true, 
                $modules['rg.be.templates']     => true, 
                $modules['rg.be.languages']     => true, 
                $modules['rg.be.mp']            => true, 
                $modules['rg.be.config']        => true, 
                $modules['rg.be.guide']         => true,  
                $modules['rg.be.audit_log']     => true, 
                $modules['rg.be.debug_toolbar'] => true, 
                $modules['rg.be.references']    => true, 
                $modules['rg.be.filemanager']   => true,
            ],
            'extensions' => [
                $extensions['rg.be.config.license'] => true
            ]
        ])
    ]
];