<?php

require("../../conexao.php");

session_start();

if(!isset($_SESSION['username'])){
    header('Location: ../login.php');
}
$id_cliente = $_POST['id_cliente'];
$formaPagamento = $_POST['formaPagamento'];
$dataEntrega = $_POST['dataEntrega'];
$localEntrega= $_POST['localEntrega'];
$precoEncomenda = $_POST['precoEncomenda'];
$qtdEncomenda = $_POST['qtdEncomenda'];

if(!isset($_GET['id_cliente'])){
    echo 'cliente invalido';
}

$sql = 'INSERT INTO `tb_encomendas` (`id_encomenda`, `id_cliente`,`forma_pagamento`, `data_entrega`, `local_entrega`, `preco_total`,`qtd_produto`)
VALUES (NULL,?, ?, ?, ?,?,?)';

$p = $banco->prepare($sql);
$p->bindValue(1, $id_cliente);
$p->bindValue(2, $formaPagamento);
$p->bindValue(3, $dataEntrega);
$p->bindValue(4, $localEntrega);
$p->bindValue(5, $precoEncomenda);
$p->bindValue(6, $qtdEncomenda);
$p->execute();
 header('Location: listaEncomendas.php');
  