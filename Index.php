<?php

require_once("Armario.php");
require_once("Documento.php");
require_once("Escritorio.php");
require_once("Gaveta.php");
require_once("Item.php");
require_once("Objeto.php");
require_once("Pasta.php");

//instanciar objeto
$objeto = new Objeto("Caneta", "Caneta azul bic", 0.1);

//listar esse objeto
echo "Listar item <br>";
$objeto->listar();

echo "<br>";
echo "<br>";

//instanciar gaveta
$gaveta = new Gaveta();
echo "Listar itens da gaveta <br>";
//adicionar objeto à gaveta
$gaveta->adicionarItem($objeto);
//listar objetos dessa gaveta
$gaveta->getItens();

echo "<br>";
echo "<br>";

//instanciar armario
$armario = new Armario();
echo "Listar gavetas do armario <br>";
//adicionado a gaveta ao armario
$armario->adicionarGaveta($gaveta);
//listar gavetas do armário
$armario-> listarGavetas();

//instanciar escritório
$escritorio = new Escritorio();
//adicionar armário ao escritorio
$escritorio->adicionarArmario($armario);
//auditoria
echo "<br>";
echo "<br>";
echo "Auditoria <br>";
$escritorio->auditoria();
