<?php
require_once 'config.php';

# "Sistema de rotas"...
if (!isset($_GET['segment1'])) pages('index');

if ($_GET['segment1'] == 'servicos') pages('servicos');
if ($_GET['segment1'] == 'cotacao') pages('cotacao');
if ($_GET['segment1'] == 'contato') pages('contato');
if ($_GET['segment1'] == 'rotas') {
    if (!isset($_GET['segment3'])) pages('rotas');
    pages('rotasDeTransporte');
}

if ($_GET['segment1'] == 'email') email();
