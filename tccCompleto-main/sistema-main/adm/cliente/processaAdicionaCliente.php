<?php

require("../../conexao.php");

session_start();

if(!isset($_SESSION['username'])){
    header('Location: ../login.php');
}

$nomeCliente = $_POST['nomeCliente'];
$enderecoCliente = $_POST['enderecoCliente'];
$rgCliente = $_POST['rgCliente'];
$dataCliente = $_POST['dataCliente'];


$sql = 'INSERT INTO `tb_clientes` (`id_cliente`,`nome_cliente`,	`endereco_usuario`,	`rg_cliente`,`dataNasc_cliente`)
VALUES (NULL, ?, ?, ?, ?)';

$p = $banco->prepare($sql);
$p->bindValue(1, $nomeCliente);
$p->bindValue(2, $enderecoCliente);
$p->bindValue(3, $rgCliente);
$p->bindValue(4, $dataCliente);
$p->execute();
header('Location: listaCliente.php');
    