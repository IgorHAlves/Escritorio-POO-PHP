<?php

require_once("Item.php");

class Gaveta
{
    private array $itens;

    function __construct()
    {
        $this->itens = [];
    }

    public function getItens()
    {
       return $this->itens;
    }

    public function setItens($itens)
    {
        $this->itens = $itens;
    }

    public function adicionarItem(Item $item)
    {
        array_push($this->itens, $item);
    }

    public function removerItem($nome)
    {
        foreach ($this->itens as $index => $item) {
            if ($item->nome == $nome) {
                unset($this->itens[$index]);
            }
        }
    }

    public function listarItens()
    {
        foreach ($this->itens as $index => $item)
            echo "{$index} - {$item->getNome()} - {$item->getDescricao()}";
    }
}
