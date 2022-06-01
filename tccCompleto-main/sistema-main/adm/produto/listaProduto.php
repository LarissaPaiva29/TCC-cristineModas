<?php

require('../../conexao.php');
session_start();

if(!isset($_SESSION['username'])){
    header('Location: ../login.php');
}

$sql ='SELECT * FROM tb_produtos';
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
                    <th>Nome da roupa</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Excluir</th>
                    <th>Editar</th>
</tr>
                <tbody>
    <?php
    
        while ($campos = $p->fetch(PDO::FETCH_ASSOC)){

        ?>
                  <tr>
                    <td><?php echo($campos['id_produto']) ?></td>
                    <td><?php echo($campos['nome_produto']) ?></td>
                    <td><?php echo($campos['descricao_produto']) ?></td>
                    <td><?php echo($campos['preco_produto']) ?></td>
                    <td><?php echo($campos['qtd_produto']) ?></td>
                    <td><a href="processoExcluiRoupa.php?id_produto=<?php echo ($campos['id_produto']); ?>">Excluir</a></td>
                    <td><a href="EditaRoupa.php?id_produto=<?php echo ($campos['id_produto']); ?>">Editar</a></td>
            

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