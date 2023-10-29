<?php
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
error_reporting(E_ALL ^ E_WARNING);

// DEFINE AS CONSTANTES DE CAMINHO E SUAS PASTAS --> PADRAO MVC
define('ROOT', $_SERVER['SERVER_NAME'] == 'localhost' ? '/SIGN_AUDIT_PROJETO_LARAVEL_2/' : '/');
define('MODEL', $_SERVER['DOCUMENT_ROOT'] . ROOT .'model/');
define('VIEW', $_SERVER['DOCUMENT_ROOT'] . ROOT .'view/template/');
define('CONTROLLER', $_SERVER['DOCUMENT_ROOT'] . ROOT .'controller/');
define('ASSET', ROOT .'view/asset/');
define('IMAGES', ROOT .'images/');

define('TAG_GOOGLE_ANALYTICS', '');
define('URL', ROOT);

require_once 'model/functions.php';
