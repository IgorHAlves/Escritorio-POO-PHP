<?php

require_once("Item.php");

class Pasta extends Item
{
    private string $categoria;

    function __construct($nome, $descricao, $categoria)
    {
        parent::__construct($nome, $descricao);
        $this->setCategoria($categoria);
    }

    public function getCategoria(): string
    {
        return $this->categoria;
    }

    public function  setCategoria(string $categoria): void
    {
        $this->categoria = $categoria;
    }

    public function listar(): void
    {
        echo "Pasta: {$this->getNome()} - {$this->getDescricao()} - {$this->getCategoria()}";
    }
}
