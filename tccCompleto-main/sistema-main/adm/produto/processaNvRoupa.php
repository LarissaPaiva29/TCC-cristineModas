<?php

require("../../conexao.php");

session_start();

if(!isset($_SESSION['username'])){
    header('Location: ../login.php');
}

$nomeProduto = $_POST['nomeProduto'];
$precoProduto = $_POST['precoProduto'];
$descricaoProduto = $_POST['descricaoProduto'];
$estoqueProduto = $_POST['estoqueProduto'];

$sql = 'INSERT INTO `tb_produtos` (`id_produto`, `nome_produto`, `descricao_produto`, `preco_produto`, `qtd_produto`)
VALUES (NULL, ?, ?, ?, ?)';

$p = $banco->prepare($sql);
$p->bindValue(1, $nomeProduto);
$p->bindValue(2, $descricaoProduto);
$p->bindValue(3, $precoProduto);
$p->bindValue(4, $estoqueProduto);
$p->execute();
header('Location: listaProduto.php');