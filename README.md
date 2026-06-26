<p align="center"><img src="https://raw.githubusercontent.com/rosgear/rg-cms-standard/refs/heads/main/readme/box.jpg"  alt="RG CMS" /></p>

[Русский](#русский) | [English](#english)

---

[![Latest Stable Version](https://img.shields.io/packagist/v/rosgear/rg-cms-standard.svg)](https://packagist.org/packages/rosgear/rg-cms-standard)
[![Total Downloads](https://img.shields.io/packagist/dt/rosgear/rg-cms-standard.svg)](https://packagist.org/packages/rosgear/rg-cms-standard)
[![Source Code](https://img.shields.io/badge/source-rosgear/rg--cms--standard-blue.svg)](https://github.com/rosgear/rg-cms-standard)
![RosGear Application: CMS](https://img.shields.io/badge/application-cms-green.svg)
![Edition: standard](https://img.shields.io/badge/edition-standard-green.svg)
[![Software License](https://img.shields.io/badge/license-GPL--3.0--or--letter-brightgreen.svg)](https://github.com/rosgear/rg-cms-standard/blob/main/LICENSE.en.md)
![php 8.2+](https://img.shields.io/badge/php-min%208.2-red.svg)

<a name="русский"></a>
## RG CMS: Редакция «Стандарт»

Веб-приложение **«RosGear: Управление сайтом», Редакция «Стандарт»** («RosGear: Site management», Edition «Standard»).

### Что такое RG CMS?
* [RG CMS](https://rosgear.ru/cms/) — это **Система управления содержимым** (CMS), что позволяет вам создавать веб-сайты и мощные онлайн-приложения;
* Это простое и мощное веб-приложение RosGear для работы которого, требуется сервер с PHP и MySQL, MariaDB или PostgreSQL. Редакция **«Стандарт»** веб-приложения RosGear
  имеет набор компонентов для создания веб-сайта с расширенным функционалом;
* RG CMS — это **бесплатное программное обеспечение с открытым исходным кодом**, распространяемое по лицензии GNU General Public License версии 3 или более поздней.

С составом редакции «Стандарт» вы можете ознакомиться по [ссылке](https://github.com/rosgear/rg-cms-standard/blob/main/CONTENT.md).

### Скриншот
<img src="https://raw.githubusercontent.com/rosgear/rg-cms-standard/refs/heads/main/readme/screenshot-1.jpg" width="100%">

### Как получить рабочую установку из исходников
Вам понадобится:
- PHP — который входит в состав [XAMPP](https://www.apachefriends.org/) (кроссплатформенная сборка локального веб-сервера) или [OSPanel](https://ospanel.io/) (локальный веб-сервер для Windows);
- Composer - для управления зависимостями веб-приложения RosGear. Для получения помощи по установке Composer прочтите документацию https://getcomposer.org/doc/00-intro.md;
- Git — для управления версиями. Скачать отсюда https://git-scm.com/downloads (пользователи MacOS также могут использовать Brew, а пользователи Linux могут использовать встроенный менеджер пакетов, например apt, yum и т. д.).

### Установка

Для установки веб-приложения, вы можете просто выполнить команду ниже:

```
$ composer create-project rosgear/rg-cms-standard
```

После установки всех пакетов перейти в каталог (например "rg-cms-standard") вашего веб-приложения и выполнить команду:

```
$ composer app-install
```

этой командой будут установлены все файлы из каталога ".install" для вашей редакции веб-приложения.

Следующая команда необходима для удаления файлов Git и файлов (README.md и т.п.) в которых нет необходимости в размещении на хостинге.

```
$ composer app-deploy
```

### Авторские права
* (C) 2015-2026 RosGear, <https://rosgear.ru/>
* Распространяется по лицензии GNU General Public License версии 3 или более поздней.
* См. [Подробности лицензии](https://github.com/rosgear/rg-cms-standard/blob/main/LICENSE.md)

<a name="english"></a>
## RG CMS: Edition «Standard»

Web application **«RosGear: Site Management», Edition «Standard»**.

### What is RG CMS?
* [RG CMS](https://rosgear.ru/cms/) is a **Content Management System** (CMS) that allows you to create websites and powerful online applications;
* This simple and powerful RosGear web application requires a server running PHP and MySQL, MariaDB, or PostgreSQL. The **«Standard»** edition of the RosGear web application includes a set of components for creating a website with advanced functionality;
* RG CMS is **free and open source software** licensed under the GNU General Public License version 3 or later.

You can find the editorial board of «Standard» at [link](https://github.com/rosgear/rg-cms-standard/blob/main/CONTENT.en.md).

### Screenshot
<img src="https://raw.githubusercontent.com/rosgear/rg-cms-standard/refs/heads/main/readme/screenshot-1.jpg" width="100%">

### How to get a working installation from source
You will need:
- PHP - which is part of [XAMPP](https://www.apachefriends.org/) (a cross-platform assembly of a local web server) or [OSPanel](https://ospanel.io/) (a local web server for Windows);
- Composer - for managing RosGear web application dependencies. For help installing Composer, see the documentation at https://getcomposer.org/doc/00-intro.md;
- Git — for version control. Download from https://git-scm.com/downloads (MacOS users can also use Brew, and Linux users can use a built-in package manager, such as apt, yum, etc.).

### Installation

To install the web application, you can simply run the command below:

```
$ composer create-project rosgear/rg-cms-standard
```

After installing all the packages, go to the directory (for example, "rg-cms-standard") of your web application and run the command:

```
$ composer app-install
```

This command will install all files from the ".install" directory for your web application edition.

The following command is required to remove Git files and files (README.md, etc.) that do not need to be hosted.

```
$ composer app-deploy
```

### Copyright
* (C) 2015-2026 RosGear, <https://rosgear.ru/>
* Distributed under the GNU General Public License version 3 or later.
* See [License details](https://github.com/rosgear/rg-cms-standard/blob/main/LICENSE.en.md)
