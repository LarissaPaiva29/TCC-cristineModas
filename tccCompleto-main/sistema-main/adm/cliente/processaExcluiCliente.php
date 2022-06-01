<?php

$id_cliente = $_GET['id_cliente'];
require("../../conexao.php");

session_start();

if(!isset($_SESSION['username'])){
    header('Location: ../login.php');
}

$sql = "DELETE FROM `tb_clientes` WHERE  `tb_clientes`. `id_cliente`=?;";
$p = $banco->prepare($sql);
$p->bindValue(1, $id_cliente);
if ($p->execute()){
     //echo('roupa excluida');
    header('Location: listaCliente.php');
}
?>