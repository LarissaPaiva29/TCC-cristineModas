<?php

require('../../conexao.php');
session_start();

if(!isset($_SESSION['username'])){
    header('Location: ../login.php');
}

$sql ='SELECT * FROM tb_clientes';
$p = $banco->prepare($sql);
$p->execute();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <link rel="stylesheet" type="text/css"  href="../../css/style.css">
    <title>Document</title>
</head>
<body>

<nav class="dp-menu">
        <ul>
        <li><a href="../index.php">voltar</a></li>
                
            </li>
            <li><img src="../../img/logo.png" alt="" class="brand-image img-retangular elevation-2"  width="100" height="50" >
        </ul>
    </nav>
    <div class="lista">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome do cliente</th>
                    <th>Endereço do cliente</th>
                    <th>Rg do cliente</th>
                    <th>Data de nascimento</th>
                    <th>Excluir</th>
                    <th>Editar</th>
</tr>
                <tbody>
    <?php
    
        while ($campos = $p->fetch(PDO::FETCH_ASSOC)){

        ?>
                  <tr>
                    <td><?php echo($campos['id_cliente']) ?></td>
                    <td><?php echo($campos['nome_cliente']) ?></td>
                    <td><?php echo($campos['endereco_usuario']) ?></td>
                    <td><?php echo($campos['rg_cliente']) ?></td>
                    <td><?php echo($campos['dataNasc_cliente']) ?></td>
                    <td><a href="processaExcluiCliente.php?id_cliente=<?php echo ($campos['id_cliente']); ?>">Excluir</a></td>
                    <td><a href="EditaCliente.php?id_cliente=<?php echo ($campos['id_cliente']); ?>">Editar</a></td>
            

            </tr>
       
    <?php
            }
            ?>
            </tbody>

        </table>
        </div>


<footer class="site-footer">
<span>CristineModas</span>

</footer>

</body>
</html>