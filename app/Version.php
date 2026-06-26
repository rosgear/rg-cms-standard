<?php
/**
 * Этот файл является частью веб-приложения RosGear.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015-2025 RosGear
 * @license https://rosgear.ru/license/
 */

namespace App;

/**
 * Версия веб-приложения RosGear.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package App
 */
class Version extends \Ge\Version\AppVersion
{
    /**
     * {@inheritdoc}
     */
    public string $code = 'RG CMS';

    /**
     * {@inheritdoc}
     */
    public string $name = 'RosGear: Site management';

    /**
     * {@inheritdoc}
     */
    public string $originalName = 'RosGear: Управление сайтом';

    /**
     * {@inheritdoc}
     */
    public string $number = '1.0';

    /**
     * {@inheritdoc}
     */
    public string $date = '01/01/2026';

    /**
     * {@inheritdoc}
     */
    public string $resource = 'https://rosgear.ru/cms/';

    /**
     * {@inheritdoc}
     */
    public string $docsResource = 'https://rosgear.ru/docs/cms/1.x/';

    /**
     * {@inheritdoc}
     * 
     * Здесь свойству будут указаны параметры обновленной версии редакции веб-приложения.
     */
    protected mixed $edition = null;
}
