<?php
/**
 * Идентфикаторы (переменные) запроса.
 * 
 * Веб-приложение «RosGear: Управление сайтом» (RG СMS).
 * Редакция «Старт» (RG CMS:STR).
 * 
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    // идентфикаторы модулей
    'modules' => [
        'rg.fe.site',
        'rg.be.articles',
        'rg.be.article_categories',
        'rg.be.mediafiles'
    ],
    // идентфикаторы расширений модулей
    'extensions' => [
        'rg.be.references.articles',
        'rg.be.references.media_types',
        'rg.be.references.media_folders',
        'rg.be.references.media_dialogs',
        'rg.be.references.folder_profiles'
    ],
    // идентфикаторы виджетов
    'widgets' => [
        'rg.wd.article',
        'rg.wd.articles',
        'rg.wd.breadcrumbs',
        'rg.wd.fine_uploader'
    ],
    // идентфикаторы плагинов
    'plugins' => [],
    // идентфикаторы элементов Панели разделов
    'partitionbar' => [
        'site' // Сайт
    ]
];
