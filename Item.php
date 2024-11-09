<?php

class Item
{
    private string $nome;
    private string $descricao;

    public function __construct(string $nome, string $descricao)
    {
        $this->setNome($nome);
        $this->setDescricao($descricao);
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function setDescricao($descricao): void
    {
        $this->descricao = $descricao;
    }

    public function listar(): void
    {
        echo "Item: {$this->getNome()} - {$this->getDescricao()}";
    }
}
