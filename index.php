<?php

use CoffeeCode\Router\Router;

require __DIR__ . "/vendor/autoload.php";

$router = new Router(ROOT);

$router->namespace('source\Controllers');

/**
 * Rotas para renderização das telas & acionamento de rotinas.
 */
$router->group(null);
$router->get('/', "Web:home", "web.home");

$router->get('/adicionar', "Web:adicionar", "web.adicionar");
$router->post('/adicionar', "Web:adicionarPost", "web.adicionarPost");

$router->get('/deletar', "Web:deletar", "web.deletar");
$router->post('/deletar', "Web:deletarPost", "web.deletarPost");

$router->get('/listar', "Web:listar", "web.listar");
$router->post('/listar', "Web:listarPost", "web.listarPost");

/**
 * Rota e tratamento de erro para url's não mapeadas.
 */
$router->group("ops");
$router->get("/{errcode}", "Web.error");

$router->dispatch();

if($router->error()){
    $router->redirect("{/ops/{$router->error()}");
}
