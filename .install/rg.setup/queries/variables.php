<?php
/**
 * Идентификаторы (переменные) запроса.
 * 
 * Применяются в качестве ключей при наполнении таблиц (см. queries.php).
 * 
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

 /** @var array $vars */
$vars = array_merge_recursive(
    // «RosGear: Рабочее пространство» (RG Workspace)
    require('variables/workspace.php'),
    // «RosGear: Управление сайтом», редакция «Старт» (RG CMS:STR)
    require('variables/cms-str.php'),
    // «RosGear: Управление сайтом», редакция «Стандарт» (RG CMS:STD)
    require('variables/cms-std.php')
);

// смещение всех идентификаторов
foreach ($vars as $name => &$items) {
    array_unshift($items, '');
    unset($items[0]);
    $items = array_flip($items);
}
return $vars;
