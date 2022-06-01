<?php
require('../conexao.php');
session_start();

if(!isset($_SESSION['username'])){
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"  href="../css/style.css">
    
</head>
<body>
<body>
    <nav class="dp-menu">
        <ul>
            <li><span style="font-size:20px;fonte-style:italic;color:white;cursor:pointer" onclick="openNav()">&#9776; Abrir</span> <a href="../destroy.php">Sair</a></li>
            <li></li>
            </li>
            <li><img src="../img/logo.png" alt="" class="brand-image img-retangular elevation-2"  width="100" height="50" >
        </ul>
    </nav>

    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="./encomendas/formNvEncomenda.html">Adicionar Encomenda</a>
  <a href="./encomendas/listaEncomendas.php">Lista de Encomendas</a>
  <a href="./produto/listaProduto.php">Lista De Roupas</a>
  <a href="./produto/formNvRoupa.html">Adicionar Roupas</a>
  <a href="./cliente/listaCliente.php">Lista de clientes</a>
  <a href="./cliente/FormNvCliente.html">Adicionar Clientes</a>
</div>

<main>
    <div>
        <h1 style='text-transform: uppercase;'>Bem vindo(a), <?php echo($_SESSION['username']['username']) ?></h1>
    </div>
    <div class='cxCard' >
        <div class='card'>
            <h3>Lista de Roupas</h3>
            <h2>Página que lista as roupas cadastradas</h2>
            <a href="produto/listaProduto.php">
                <button>IR</button>
            </a>
            
        </div>
        <div class='card'>
            <h3>Lista de Clientes</h3>
            <h2>Página que lista os clientes cadastrados</h2>
            <a href="cliente/listaCliente.php">
                <button>IR</button>
            </a>
        </div>
        <div class='card'>
            <h3>Lista de Encomendas</h3>
           <h2>Página que lista as encomendas cadastradas</h2>
           <a href="encomendas/listaEncomendas.php">
                <button>IR</button>
           </a>
        </div>
    </div> 
</main>
   

<footer class="site-footer">
<span>CristineModas</span>

</footer>



<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
   
</body>

</html>
</body>