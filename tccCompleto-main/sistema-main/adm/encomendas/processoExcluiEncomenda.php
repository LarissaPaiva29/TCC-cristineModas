<?php

$id_encomenda = $_GET['id_encomenda'];
require("../../conexao.php");

session_start();

if(!isset($_SESSION['username'])){
    header('Location: ../login.php');
}

$sql = "DELETE FROM `tb_encomendas` WHERE  `tb_encomendas`. `id_encomenda`=?;";
$p = $banco->prepare($sql);
$p->bindValue(1, $id_encomenda);
if ($p->execute()){
     //echo('roupa excluida');
    header('Location: listaEncomendas.php');
}
?>