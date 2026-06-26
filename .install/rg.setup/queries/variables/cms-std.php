<?php
/**
 * Идентфикаторы (переменные) запроса.
 * 
 * Веб-приложение «RosGear: Управление сайтом» (RG СMS).
 * Редакция «Стандарт» (RG CMS:STD).
 * 
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    // идентфикаторы модулей
    'modules' => [
        'rg.be.site_menu',
        'rg.be.site_markup',
        'rg.be.media_gallery',
        'rg.fe.sitemap',
        'rg.fe.rss',
        'rg.be.rss_feeds',
        'rg.be.tags',
        'rg.fe.tags'
    ],
    // идентфикаторы расширений модулей
    'extensions' => [
        'rg.be.config.multisite'
    ],
    // идентфикаторы виджетов
    'widgets' => [
        'rg.wd.menu',
        'rg.wd.yandexshare',
        'rg.wd.fancybox',
        'rg.wd.lightgallery',
        'rg.wd.tagcloud',
        'rg.wd.tags'
    ],
    // идентфикаторы плагинов
    'plugins' => [
        'rg.plg.image_album'
    ],
    // информационная панель
    'dashboards' => [
        'site'
    ],
    // идентфикаторы ролей пользователей
    'roles' => [
        'editor' // Редактор
    ]
];
