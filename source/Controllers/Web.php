<?php

namespace Source\Controllers;

use League\Plates\Engine;
use Source\Models\User;

use CoffeeCode\DataLayer\DataLayer;
use JsonException;

class Web
{
    private $view;

    public function __construct($router)
    {
        $this->view = Engine::create(
            __DIR__ . "/../../theme",
            "php"
        );
        $this->view->addData(["router" => $router]);
    }

    public function teste()
    {  
        echo $this->view->render("teste", [
        
        ]);
    }
    public function home(): void
    {
        $produtos = (new User())->find()->order("id")->fetch(true);

        echo $this->view->render("home", [
            "title" => "Home | Projeto MVC",
            "produtos" => $produtos
        ]);
    }

    public function adicionar(): void
    {
        echo $this->view->render("adicionar", [
            'title' => 'Produtos MVC | Adicionar'
        ]);
    }

    public function adicionarPost(array $data)
    {   
        $user = new User();
        $user->nome_produto = $data["nome_produto"];
        $user->descricao = $data["descricao"];
        $user->valor = $data["valor"];
        $user->qtd_produto = $data["qtd_produto"];
        $user->created_at = date("Y-m-d H:i:s");  
        $user->save();

        echo $this->view->render("adicionar", [
            "title" => "Produtos MVC | Adicionar"
        ]);
        echo '<div class="alert alert-success" role="alert">Produto adicionado com sucesso!</div>';
    }

    public function deletar($id): void
    {   
        $produtos = (new User())->find()->order("id")->fetch(true);
        echo $this->view->render("deletar", [
            'title' => 'Produtos MVC | Deletar',
            'produtos' => $produtos
        ]);
    }

    public function deletarPost(array $data): void
    {   
        $produtos = (new User())->findById($_POST['botao1']);
        if($produtos)
            $produtos->destroy();

        echo $this->view->render("deletar", ['title' => 'Produtos MVC | Deletar', 'produtos' => $produtos]);
        echo json_encode($produtos);
        echo '<div class="alert alert-danger" role="alert">Produto retirado com sucesso!</div>';
    }

    public function listar($id): void
    {
        $produtos = (new User())->find()->order("id")->fetch(true);

        echo $this->view->render("listar", [
            "title" => "Produtos MVC | Listar",
            "produtos" => $produtos
        ]);
    }

    public function listarPost(array $response): void
    {   

        $query = (new User())->findById($response['id']);

        $this->view->render("listar", ['title' => 'Produtos MVC | Listar', 'data' => $query]);
        $data["produto_id"] = $query->id;
        $data["produto_nome"] = $query->nome_produto;
        $data["produto_descricao"] = $query->descricao;
        $data["produto_valor"] = $query->valor;
        $data["produto_qtd"] = $query->qtd_produto;
        $data["produto_data"] = $query->created_at;

        echo json_encode($data);
    }

    public function error(array $data): void
    {
        echo "<h1>Erro {$data["errcode"]}</h1>";
    }
}
