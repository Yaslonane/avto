<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 01.04.2016
 * Time: 17:37
 */

// front controller 


// 1. Общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

// 2. Подключение файлов системы

define('ROOT', dirname(__FILE__)); //инициализируем константу содержащую расположение директории сайта на сервере
define('TMPL', '/views/default/'); //инициализируем константу содержащую путь до текущего оформления сайта
define('ADM_TMPL', '/views/adm_default/'); //инициализируем константу содержащую путь до текущего оформления сайта
define('LIB', '/lib/'); //инициализируем константу содержащую путь до текущего оформления сайта
define('DOMAIN', 'http://avto.local'); //инициализируем константу содержащую домен сайта
define('IMG_CONT', '/images/content/'); //инициализируем константу содержащую домен сайта

require_once(ROOT . '/components/Autoload.php');


// 3. Подключение к БД


// 4. Вызов router

$router = new Router(); //вызываем класс роутер
$router->run(); //