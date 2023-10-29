<?php
function index() {
    view('index', [
        'title' => 'Transporte de cargas para todo o Brasil',
        'description' => 'Temos a experiência de 10 anos no mercado de transportes, e milhares de clientes satisfeitos com nossos serviços.',
    ]);
}

function servicos() {
    view('servicos', [
        'title' => 'Serviços',
        'description' => 'Realizando serviços de transporte com rapidez e segurança, a Cometa Cargas permite manter um padrão no atendimento e na qualidade dos serviços prestados.'
    ]);
}

function rotas() {
    view('rotas', [
        'title'       => 'Rotas de transporte',
        'description' => 'Conheça nossas rotas de transporte. Atendemos todo o território nacional. Confira.',
        'estados'     => getEstados(),
        'exceptEstados' => ['Acre', 'Amapá', 'Amazonas', 'Rondônia', 'Roraima']
    ]);
}

function rotasDeTransporte() {
    $route = ['origin' => getEstados($_GET['segment2']), 'destination' => getEstados($_GET['segment3'])];
    
    view('cotacao', [
        'title'       => 'Transportadora de '. $route['origin'] .' para '. $route['destination'],
        'description' => 'Solicite uma cotação gratuita e confira o valor da entrega de sua carga de '. $route['origin'] .' para '. $route['destination'],
        'route'       => $route
    ]);
}

function contato() {
    view('contato', [
        'title' => 'Entre em contato',
        'description' => 'Atuamos desde 2020 no transporte rodoviário de cargas em todo o território nacional com uma equipe altamente qualificada'
    ]);
}

function cotacao() {
    view('cotacao', [
        'title' => 'Solicitar cotação',
        'description' => 'Nossa equipe está preparada para lhe atender e agilizar todos os processos para o transporte da sua carga. Chame e faça já sua cotação'
    ]);
}
