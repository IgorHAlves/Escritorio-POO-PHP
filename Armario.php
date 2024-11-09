<?php

require_once("Gaveta.php");

class Armario
{
    private array $gavetas;

    function __construct()
    {
        $this->gavetas = [];
    }

    public function getGavetas() : array
    {
        return $this->gavetas;
    }

    public function adicionarGaveta(Gaveta $gaveta)
    {
        array_push($this->gavetas, $gaveta);
    }

    public function removerGaveta($indice)
    {
        unset($this->gavetas[$indice]);
    }

    public function listarGavetas()
    {
        foreach ($this->gavetas as $index => $gaveta) {
            echo "Gaveta - {$gaveta->listarItens()}";
        }
    }
}
