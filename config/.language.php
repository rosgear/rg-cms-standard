<?php
/**
 * Файл конфигурации языков.
 * 
 * Здесь перечисляются локализации с их параметрами конфигурации, только те, 
 * которые поставляются непосредственно с фреймворком.

 * Локализации добавленные через Панель управления GePanel, будут в файле 
 * конфигурации ".language.so" (включая локализации перечисленные ниже).
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2026 RosGear
 * @license https://rosgear.ru/license/
 */
 
return [
    /*
     * Русская локализация.
     */
    'ru_RU' => [
        'tag'         => 'ru-RU',
        'code'        => 570643,
        'name'        => 'Русский язык',
        'shortName'   => 'Русский',
        'country'     => 'Russia',
        'slug'        => 'ru',
        'locale'      => 'ru_RU',
        'alternative' => 'en_GB',
        FRONTEND      => true,
        BACKEND       => true
    ],

    /*
     * Английская (британская) локализация.
     */
    'en_GB' => [
        'tag'         => 'en-GB',
        'code'        => 45826,
        'name'        => 'English language',
        'shortName'   => 'English',
        'country'     => 'United Kingdom',
        'slug'        => 'en',
        'locale'      => 'en_GB',
        'alternative' => 'en_GB',
        FRONTEND      => true,
        BACKEND       => true
    ],

    /*
     * Белорусская локализация.
     */
    'be_BY' => [
        'tag'         => 'be-BY',
        'code'        => 90112,
        'name'        => 'Беларуская мова',
        'shortName'   => 'Беларускі',
        'country'     => 'Belarus',
        'slug'        => 'be',
        'locale'      => 'be_BY',
        'alternative' => 'en_GB',
        FRONTEND      => false,
        BACKEND       => true
    ],

    /*
     * Немецкая локализация.
     */
    'de_DE' => [
        'tag'           => 'de-DE',    
        'code'          => 481276,
        'name'          => 'Deutsche sprache',
        'shortName'     => 'Deutsch',
        'country'       => 'Germany',
        'slug'          => 'de',
        'locale'        => 'de_DE',
        'alternative'   => 'en_GB',
        FRONTEND        => false,
        BACKEND         => true
    ],

    /*
     * Испанская локализация.
     */
    'es_ES' => [
        'tag'         => 'es-ES',    
        'code'        => 230724,
        'name'        => 'Español',
        'shortName'   => 'Español',
        'country'     => 'Spain',
        'slug'        => 'es',
        'locale'      => 'es_ES',
        'alternative' => 'en_GB',
        FRONTEND      => false,
        BACKEND       => true
    ],

    /*
     * Французская локализация.
     */
    'fr_FR' => [
        'tag'         => 'fr-FR',    
        'code'        => 745250,
        'name'        => 'Français',
        'shortName'   => 'Français',
        'country'     => 'France',
        'slug'        => 'fr',
        'locale'      => 'fr_FR',
        'alternative' => 'en_GB',
        FRONTEND      => false,
        BACKEND       => true
    ],

    /*
     * Индийская (хинди) локализация.
     */
    'hi_IN' => [
        'tag'         => 'hi-IN',    
        'code'        => 770356,
        'name'        => 'हिंदी',
        'shortName'   => 'हिंदी',
        'country'     => 'India',
        'slug'        => 'hi',
        'locale'      => 'hi_IN',
        'alternative' => 'en_GB',
        FRONTEND      => false,
        BACKEND       => true
    ],

    /*
     * Итальянская локализация.
     */
    'it_IT' => [
        'tag'         => 'it-IT',    
        'code'        => 235380,
        'name'        => 'Italiano',
        'shortName'   => 'Italiano',
        'country'     => 'Italy',
        'slug'        => 'it',
        'locale'      => 'it_IT',
        'alternative' => 'en_GB',
        FRONTEND      => false,
        BACKEND       => true
    ],

    /*
     * Казахская локализация.
     */
    'kk_KZ' => [
        'tag'         => 'kk-KZ',    
        'code'        => 255398,
        'name'        => 'Қазақ тілі',
        'shortName'   => 'Қазақ',
        'country'     => 'Kazakhstan',
        'slug'        => 'kk',
        'locale'      => 'kk_KZ',
        'alternative' => 'en_GB',
        FRONTEND      => false,
        BACKEND       => true
    ],

    /*
     * Польская локализация.
     */
    'pl_PL' => [
        'tag'         => 'pl-PL',    
        'code'        => 540616,
        'name'        => 'Polski',
        'shortName'   => 'Polski',
        'country'     => 'Poland',
        'slug'        => 'pl',
        'locale'      => 'pl_PL',
        'alternative' => 'en_GB',
        FRONTEND      => false,
        BACKEND       => true
    ],

    /*
     * Турецкая локализация.
     */
    'tr_TR' => [
        'tag'         => 'tr-TR',    
        'code'        => 693792,
        'name'        => 'Türkçe',
        'shortName'   => 'Türkçe',
        'country'     => 'Türkiye',
        'slug'        => 'tr',
        'locale'      => 'tr_TR',
        'alternative' => 'en_GB',
        FRONTEND      => false,
        BACKEND       => true
    ],

    /*
     * Китайская (традиционная) локализация.
     */
    'zh_CN' => [
        'tag'         => 'zh-CN',    
        'code'        => 315156,
        'name'        => 'Chinese',
        'shortName'   => '中國人',
        'country'     => 'China',
        'slug'        => 'zh',
        'locale'      => 'zh_CN',
        'alternative' => 'en_GB',
        FRONTEND      => false,
        BACKEND       => true
    ]
];
