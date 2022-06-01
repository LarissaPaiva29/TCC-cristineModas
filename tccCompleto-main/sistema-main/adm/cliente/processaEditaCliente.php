<?php
require('../../conexao.php');
session_start();

if(!isset($_SESSION['username'])){
    header('Location: ../login.php');
}

$id_cliente = $_POST['id_cliente'];
$nomeCliente = $_POST['nomeCliente'];
$enderecoCliente = $_POST['enderecoCliente'];
$rgCliente = $_POST['rgCliente'];
$dataCliente = $_POST['dataCliente'];

$sql = 'UPDATE tb_clientes ';
$sql .= 'SET nome_cliente = ?, endereco_usuario = ?, rg_cliente = ?, dataNasc_cliente = ?';
$sql .= 'WHERE id_cliente = ?';
$p = $banco->prepare($sql);
$p->bindValue(1, $nomeCliente);
$p->bindValue(2, $enderecoCliente);
$p->bindValue(3, $rgCliente);
$p->bindValue(4, $dataCliente);
$p->bindValue(5, $id_cliente);
$p->execute();
header('Location: listaCliente.php');
