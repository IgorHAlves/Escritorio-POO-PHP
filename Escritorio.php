<?php

require_once("Armario.php");

class Escritorio
{
    private array $armarios;

    function __construct()
    {
        $this->armarios = [];
    }

    public function getArmarios(): array
    {
        return $this->armarios;
    }

    public function setArmarios(array $armarios): void
    {
        $this->armarios = $armarios;
    }

    public function adicionarArmario(Armario $armario)
    {
        array_push($this->armarios, $armario);
    }

    public function removerArmario($indice)
    {
        unset($this->armarios[$indice]);
    }

    public function listarArmarios()
    {
        foreach ($this->armarios as $index => $armario) {
            echo "Armario  - {$index}";
        }
    }

    public function auditoria()
    {
        foreach ($this->armarios as $indexArmario => $armario)
        {
            echo "Armário {$indexArmario} -------------<br> ";
            foreach($armario->getGavetas() as $indexGaveta => $gaveta)
            {
                echo "Gaveta - {$indexGaveta} <br>";
                foreach($gaveta->getItens() as $item)
                {
                    echo $item->listar();
                };
            }
        }
    }
}


