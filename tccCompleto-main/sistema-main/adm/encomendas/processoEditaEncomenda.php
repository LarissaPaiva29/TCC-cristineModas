<?php

require('../../conexao.php');
session_start();
if(!isset($_SESSION['username'])){
    header('Location: ../login.php');
}

$id_encomenda = $_POST['id_encomenda'];
$formaPagamento = $_POST['formaPagamento'];
$dataEntrega = $_POST['dataEntrega'];
$localEntrega = $_POST['localEntrega'];
$precoEncomenda = $_POST['precoEncomenda'];
$qtdEncomenda = $_POST['qtdEncomenda'];


$sql = 'UPDATE tb_encomendas ';
$sql .= 'SET forma_pagamento = ?, data_entrega = ?, local_entrega = ?, preco_total = ?, qtd_produto = ? ';
$sql .= 'WHERE id_encomenda = ?';
$p = $banco->prepare($sql);
$p->bindValue(1, $formaPagamento);
$p->bindValue(2, $dataEntrega);
$p->bindValue(3, $localEntrega);
$p->bindValue(4, $precoEncomenda);
$p->bindValue(5, $qtdEncomenda);
$p->bindValue(6, $id_encomenda);

$p->execute();
header('Location: listaEncomendas.php');
?>