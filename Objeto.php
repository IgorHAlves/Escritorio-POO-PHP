<?php

require_once("Item.php");

class Objeto extends Item
{
    private float $peso;

    public function __construct($nome, $descricao, $peso)
    {
        parent::__construct($nome, $descricao);
        $this->setPeso($peso);
    }

    public function getPeso(): float
    {
        return $this->peso;
    }

    public function setPeso($peso): void
    {
        $this->peso = $peso;
    }

    public function listar(): void
    {
        echo "Objeto: {$this->getNome()} - {$this->getDescricao()} - {$this->getPeso()}";
    }
}
