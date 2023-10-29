<?php
require_once 'config.php';


function obterUltimaParteDaURL() {
    // Obtém o caminho (URI) da requisição
    $caminho = $_SERVER['REQUEST_URI'];

    // Usa basename para obter a última parte após a última barra
    $ultimaParte = basename($caminho);

    return $ultimaParte;
}

// Exemplo de uso
$ultimaParteDaURL = obterUltimaParteDaURL();

// Exibe a última parte da URL
echo $ultimaParteDaURL;

# "Sistema de rotas"...
if (!isset($_GET['segment1'])) pages('index');
if ($ultimaParteDaURL == 'auditoria') pages('auditoria');
if ($_GET['segment1'] == 'bps') pages('bps');
if ($_GET['segment1'] == 'clientes') pages('clientes');
if ($_GET['segment1'] == 'consultoria-de-rh') pages('consultoria_de_rh');
if ($_GET['segment1'] == 'consultoria') pages('consultoria');
if ($_GET['segment1'] == 'contato') pages('contato');
if ($_GET['segment1'] == 'quem-somos') pages('quem_somos');
if ($_GET['segment1'] == 'tributario') pages('tributario');
if ($_GET['segment1'] == 'email') email();
