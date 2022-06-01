<?php
require('../../conexao.php');
session_start();

if(!isset($_SESSION['username'])){
    header('Location: ../login.php');
}

$sql = 'SELECT * FROM tb_encomendas WHERE id_encomenda = ?';
$stm = $banco->prepare($sql);
$stm->bindValue(1, $_GET["id_encomenda"]);

$stm->execute();
$encomenda = $stm->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
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

    <section class="content-header">
      <h1>
        Editar <small>Encomenda</small>
      </h1>
     
      <div class="containerCad">
    <a class="links" id="cadastro"></a>

  <div class="contentCad">
      <div id="cadastro">
      <form action="processoEditaEncomenda.php" method="POST"  >
      <input type="hidden" name="id_encomenda" value="<?php echo $encomenda["id_encomenda"]?>"/>
       

          <p> 
            <label for="pagamento">Forma de Pagamento</label>
            <input id="formaPagamento" name="formaPagamento"  type="text" placeholder="forma do pagamento" required
            value="<?php echo $encomenda["forma_pagamento"]?>"/>
          </p>
           
          <p> 
            <label for="data">Data de entrega</label>
            <input id="data" name="dataEntrega"  type="date" placeholder="data de entrega"  required
            value="<?php echo $encomenda["data_entrega"]?>"/> 
          </p>
           
          <p> 
            <label for="local">Local da entrega</label>
            <input id="local" name="localEntrega"  type="text"  placeholder="Local da entrega"  required
            value="<?php echo $encomenda["local_entrega"]?>"/> 
          </p>

          <p> 
            <label for="preco">Preço total da compra</label>
            <input id="preco" name="precoEncomenda" type="text" onkeypress="$(this).mask('R$ #.##0,00', {reverse: true});" placeholder="preço total da compra" 
            value="<?php echo $encomenda["preco_total"]?>"  required/> 
          </p>

          <p> 
            <label for="qtd">Quantidade de roupas</label>
            <input id="qtd" name="qtdEncomenda" type="text"  placeholder="quantidade de roupas" required
            value="<?php echo $encomenda["qtd_produto"]?>"/> 
          </p>
    
          <div id="cxBtn">
            <input type="submit" value="Editar" />
            <input type="button" value="Cancelar" id="btnCancelar">
          </div>

</div>
        </form>
<script>
  const btn = document.getElementById('btnCancelar')
  btn.addEventListener('click',()=>{
    window.location = '../encomendas/ListaEncomendas.php'
  })
</script>
</div>



</body>
</html>