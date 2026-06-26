<?php
/**
 * Файл конфигурации менеджера шорткодов (shortcodes).
 * 
 * Здесь перечисляются основные шорткоды, которые используются в шаблонах 
 * компонентов (backend, frontend).
* 
 * Компоненты, которые имеют шорткоды и добавленны через Панель управления GePanel, будут в файле 
 * конфигурации ".shortcodes.so" (включая шорткоды перечисленные ниже).
 * 
 * Пример записи шорткода в параметре 'shortcodes':
 * 1) короткая запись `['tagName' => 'moduleId']`, 
 * результат: `module->tagNameShortcode(attributes)`;
 * 2) полная запись `['tagName' => ['componentType' => 'componentId', 'func' => 'componentMethod']`,
 * результат: `component->componentMethod(attributes)`.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    /** Шаблон метода компонента (модуль, расширение, виджет) возвращающий шорткод */
    'patternFunc' => '%sShortcode',

    /** Теги шорткодов */
    'shortcodes' => [
        'html-title' => 'rg.fe.site',
        'html-meta'  => 'rg.fe.site',
        'html-begin' => 'rg.fe.site',
        'html-end'   => 'rg.fe.site',
        'html-load'  => 'rg.fe.site',
        'html-ready' => 'rg.fe.site',
        'html-head'  => 'rg.fe.site',
        'widget'     => 'rg.fe.site',
        'if'         => 'rg.fe.site'
    ]
];
