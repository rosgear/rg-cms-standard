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
        'panel_id'  => $dashboards['site'],
        'column'    => 1,
        'index'     => 1,
        'options'   => Json::encode([
            'showModules'     => true,
            'showExtensions'  => true,
            'showTitle'       => true, 
            'showDescription' => true,
            'showSmall'       => false,
            'modules'         => [
                $modules['rg.be.site_menu']          => true, 
                $modules['rg.be.site_markup']        => true, 
                $modules['rg.be.media_gallery']      => true, 
                $modules['rg.be.rss_feeds']          => true, 
                $modules['rg.be.articles']           => true, 
                $modules['rg.be.article_categories'] => true,
                $modules['rg.be.mediafiles']         => true,
                $modules['rg.be.tags']               => true
            ],
            'extensions' => [
                $extensions['rg.be.references.articles']        => true,
                $extensions['rg.be.references.media_types']     => true,
                $extensions['rg.be.references.media_folders']   => true,
                $extensions['rg.be.references.media_dialogs']   => true,
                $extensions['rg.be.references.folder_profiles'] => true
            ]
        ])
    ],
    [
        'widget_id' => $widgets['rg.ds.version'],
        'panel_id'  => $dashboards['site'],
        'column'    => 2,
        'index'     => 1,
        'options'   => Json::encode([
            'showAppVersion'     => true,
            'showEditionVersion' => true,
            'showVersions'       => true, 
            'showReleaseDate'    => true,
            'showPanelVersion'   => false,
            'showFwVersion'      => false,
            'showDetails'        => false
        ])
    ],
    [
        'widget_id' => $widgets['rg.ds.license'],
        'panel_id'  => $dashboards['site'],
        'column'    => 2,
        'index'     => 2
    ]
];