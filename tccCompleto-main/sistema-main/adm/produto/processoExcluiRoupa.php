<?php

$id_produto = $_GET['id_produto'];
require("../../conexao.php");

session_start();

if(!isset($_SESSION['username'])){
    header('Location: ../login.php');
}

$sql = "DELETE FROM `tb_produtos` WHERE  `tb_produtos`. `id_produto`=?;";
$p = $banco->prepare($sql);
$p->bindValue(1, $id_produto);
if ($p->execute()){
     //echo('roupa excluida');
    header('Location: listaProduto.php');
}
?>