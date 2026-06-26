<?php
/**
 * Таблицы используемые картой SQL запросов (раздел "insert").
 * 
 * Веб-приложение «RosGear: Управление сайтом» (RG СMS).
 * Редакция «Стандарт» (RG CMS:STD).
 * 
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    // модули панели разделов
    '{{panel_partitionbar_modules}}' => require('cms-std/panel_partitionbar_modules.php'),
    // информационная панель
    '{{panel_dashboard}}' => require('cms-std/panel_dashboard.php'),
        // виджеты информационных панелей
        '{{panel_dashboard_widgets}}' => require('cms-std/panel_dashboard_widgets.php')
];