<?php
/**
 * Таблицы используемые картой SQL запросов (раздел "insert").
 * 
 * Применяются в качестве ключей при наполнении таблиц (см. queries.php).
 * 
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

 /** @var string $step Текущий шаг */
$step = $installer->getStepName();
$data = array_merge_recursive(
    // «RosGear: Рабочее пространство» (RG Workspace)
    require('tables/workspace.php'),
    // «RosGear: Управление сайтом», редакция «Старт» (RG CMS:STR)
    require('tables/cms-str.php'),
    // «RosGear: Управление сайтом», редакция «Стандарт» (RG CMS:STD)
    require('tables/cms-std.php')
);

// если шаг "Сборка" и применить демонстрационные данные
if ($applyDemo && $step === 'assembly') {
    $data = array_merge_recursive(
        $data,
        // Демонстрационные данные
        require('tables/demo.php')
    );
}
return $data;
