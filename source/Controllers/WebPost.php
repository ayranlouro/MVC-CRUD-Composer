<?php

namespace Source\Controllers;

use League\Plates\Engine;

use Symfony\Component\VarDumper;

class WebPost
{
    public function __construct()
    {
        $this->view = Engine::create(
            __DIR__ . "/../../theme",
            "php"
        );
    }

    public function adicionarPost($data): void
    {
        echo '<h1>Adicionar Post</h1>';
        var_dump($data);
    }

    public function deletarPost($id): void
    {
        
    }

    public function listarPost($id): void
    {
        
    }

    public function error(array $data): void
    {
        echo "<h1>Erro {$data["errcode"]}</h1>";
    }
}