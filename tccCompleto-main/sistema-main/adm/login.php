
<?php
require('../conexao.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  
<link rel="stylesheet" href="../css/style.css">

  <title>Estoque Cristine Modas Log in</title>

</head>
<body>
<div class="container">
    <a class="links" id="login"></a>

  <div class="content">
      <div id="login">
          <form method="post" action="processaLogin.php">
  
    <h1> <a style = "color: #9932CC;" > <b>Estoque</b>Cristine Modas</a></h1> 
          <p> 
            <label for="username">Seu nome</label>
            <input id="username" name="username" required="required" type="text" placeholder="nome do usuário"/>
          </p>
           
          <p> 
            <label for="password">Sua senha</label>
            <input id="password" name="senha" required="required" type="password" placeholder="senha do usuário" /> 
          </p>
           
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
           
          
            <input type="submit" value="Logar" /> 
         
           
    
        </form>
      </div>
</div>
</body>
</html>
 

    
    

   
    </div>
   
  </div>
</div>


</body>
</html>
