<?php

namespace source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
    public function __construct()
    {
        parent::__construct("produtos", ["nome_produto", "descricao", "valor", "qtd_produto", "created_at"]);
        //parent::__construct("usuarios", ["first_name", "last_name"]);
    }
}