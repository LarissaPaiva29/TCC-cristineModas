<?php
require('../../conexao.php');
session_start();

if(!isset($_SESSION['username'])){
    header('Location: ../login.php');
}

$id_produto = $_POST['id_produto'];
$nomeProduto = $_POST['nomeProduto'];
$precoProduto = $_POST['precoProduto'];
$descricaoProduto = $_POST['descricaoProduto'];
$estoqueProduto = $_POST['estoqueProduto'];

$sql = 'UPDATE tb_produtos ';
$sql .= 'SET nome_produto = ?, descricao_produto = ?, preco_produto = ?, qtd_produto = ?';
$sql .= 'WHERE id_produto = ?';
$p = $banco->prepare($sql);
$p->bindValue(1, $nomeProduto);
$p->bindValue(2, $descricaoProduto);
$p->bindValue(3, $precoProduto);
$p->bindValue(4, $estoqueProduto);
$p->bindValue(5, $id_produto);
$p->execute();
header('Location: listaProduto.php');