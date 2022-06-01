<?php
session_start();
require('../conexao.php');

try {
    $login = $_POST['username'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM tb_usuarios WHERE nome_usuario = ? AND senha_usuario = ? ";
    $stmt = $banco->prepare($sql);
    $stmt->bindValue(1, $login);
    $stmt->bindValue(2, $senha);
    
    $stmt->execute();

    if ($campo = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $_SESSION['username']['id_usuario'] = $campo["id_usuario"];
        $_SESSION['username']['username'] = $campo["nome_usuario"];
        header('Location: index.php');
    } 
    else {
        echo("Não encontrado!!");
    }
} catch (PDOException $e) {

    echo $e->getMessage();
}
?>