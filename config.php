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
define('COMPANY_NAME', 'COMETA CARGAS');
define('COMPANY_CNPJ', '28.135.370/0001-55');
define('TEXT_WHATSAPP', '(11) 95809-7327');
define('LINK_WHATSAPP', 'https://api.whatsapp.com/send?phone=55'. str_replace(['(', ')', '-', ' '], '', TEXT_WHATSAPP) .'&text=Olá *'. COMPANY_NAME .'*, estou entrando em contato através do site e gostaria de uma cotação de frete!');
define('TEXT_PHONE', '(11) 4003-0952');
define('LINK_PHONE', 'tel:'. str_replace(['(', ')', '-', ' '], '', TEXT_PHONE) .'');
define('TEXT_EMAIL', 'comercial@cometacargas.com.br');
define('LINK_EMAIL', 'mailto:'. trim(strtolower(TEXT_EMAIL)));

require_once 'model/functions.php';
