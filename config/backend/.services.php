<?php
/**
 * Файл конфигурации менеджера служб.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    /** Cлужба "HTTP-ответ" */
    'response' => [
        'class'      => '\Ge\Panel\Http\Response',
        'formatters' => [
            'jsong' => '\Ge\Panel\Http\Response\JsongResponseFormatter',
        ]
    ],

    /** Cлужба "Пользователь" */
    'user' => [
        'class'         => '\Ge\Panel\User\User',
        'identityClass' => '\Ge\Panel\User\UserIdentity',
        'storageClass'  => '\Ge\User\UserSessionStorage'
    ],

    /** Cлужба "Таблицы кэша" */
    'tables' => [
        'class'    => '\Ge\Cache\CacheTable',
        'patterns' => [
        ]
    ]
];
