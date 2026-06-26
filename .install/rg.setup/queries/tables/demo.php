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

/** @var bool $isRu Текущая установка в русской локализации*/
$isRu = $installer->isRu();

return [
  // роли пользователей
  '{{role}}' => require('demo/role.php'),
      // автозапуск модулей и расширений
      '{{panel_autorun}}' => require('demo/panel_autorun.php'),
      // права доступа к элементам панели разделов
      '{{panel_partitionbar_roles}}' => require('demo/panel_partitionbar_roles.php'),
      // права доступа к элементам панели уведомлений
      '{{panel_traybar_roles}}' => require('demo/panel_traybar_roles.php'),
      // права доступа к информационным панелям
      '{{panel_dashboard_roles}}' => require('demo/panel_dashboard_roles.php'),
      // права доступа к элементам меню панели управления
      '{{panel_menu_roles}}' => require('demo/panel_menu_roles.php'),
      // права доступа к модулям
      '{{module_permissions}}' => require('demo/module_permissions.php'),
      // права доступа к расширениям модулей
      '{{extension_permissions}}' => require('demo/extension_permissions.php'),
  // пользователи
  '{{user}}' => require('demo/user.php'),
      // профили пользователей
      '{{user_profile}}' => require('demo/user_profile.php'),
  // типы материалов сайта
  '{{reference_articles}}' => require('demo/reference_articles.php')
];
