<?php
require_once 'config.php';

# "Sistema de rotas"...
if (!isset($_GET['segment1'])) pages('index');
if ($_GET['segment1'] == 'auditoria') pages('auditoria');
if ($_GET['segment1'] == 'bps') pages('bps');
if ($_GET['segment1'] == 'clientes') pages('clientes');
if ($_GET['segment1'] == 'consultoria-de-rh') pages('consultoria_de_rh');
if ($_GET['segment1'] == 'consultoria') pages('consultoria');
if ($_GET['segment1'] == 'contato') pages('contato');
if ($_GET['segment1'] == 'quem-somos') pages('quem_somos');
if ($_GET['segment1'] == 'tributario') pages('tributario');
if ($_GET['segment1'] == 'email') email_novo();
if ($_GET['segment1'] == 'obrigado') pages('obrigado');
if ($_GET['segment1'] == 'termos') pages('termos');
if ($_GET['segment1'] == 'arquivos') pages('sistema_arquivos');
