<?php
/**
 * Таблицы используемые картой SQL запросов (раздел "insert").
 * 
 * Веб-приложение «RosGear: Рабочее пространство» (RG Workspace).
 * 
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    // api
    '{{api}}' => require('workspace/api.php'),
    // роли пользователей
    '{{role}}' => require('workspace/role.php'),
        // автозапуск модулей и расширений
        '{{panel_autorun}}' => require('workspace/panel_autorun.php'),
        // права доступа к элементам панели разделов
        '{{panel_partitionbar_roles}}' => require('workspace/panel_partitionbar_roles.php'),
        // права доступа к элементам панели уведомлений
        '{{panel_traybar_roles}}' => require('workspace/panel_traybar_roles.php'),
        // права доступа к информарционным панелям
        '{{panel_dashboard_roles}}' => require('workspace/panel_dashboard_roles.php'),
        // права доступа к элементам меню панели управления
        '{{panel_menu_roles}}' => require('workspace/panel_menu_roles.php'),
    // панель разделов
    '{{panel_partitionbar}}' => require('workspace/panel_partitionbar.php'),
        // модули панели разделов
        '{{panel_partitionbar_modules}}' => require('workspace/panel_partitionbar_modules.php'),
        // расширения модулей панели разделов
        '{{panel_partitionbar_extensions}}' => require('workspace/panel_partitionbar_extensions.php'),
    // информационная панель
    '{{panel_dashboard}}' => require('workspace/panel_dashboard.php'),
        // виджеты информационных панелей
        '{{panel_dashboard_widgets}}' => require('workspace/panel_dashboard_widgets.php'),
    // меню панели управления
    '{{panel_menu}}' => require('workspace/panel_menu.php'),
    // панель уведомлений
    '{{panel_traybar}}' => require('workspace/panel_traybar.php')
];
