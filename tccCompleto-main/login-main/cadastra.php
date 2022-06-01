

<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>

        <body>
            <div id="corpo-form-cad">
            <h1> Cadastrar </h1>
            <form method="post" action="processa.php">
            <input type="nome" name="nome" placeholder="Digite seu nome" maxlength="30" required>
                <input type="email" name="email" placeholder="Digite seu email"maxlength="40" required>
                <input type="telefone" name="telefone" placeholder="Seu telefone"maxlength="11" required>
                <input type="password" name="senha" placeholder="Digite uma senha"maxlength="32" required>
                <input type="password" name="confirma_senha" placeholder="Confirma senha"maxlength="32" required>
                <input type="submit" value="Cadastrar">

            
               
            </div>
            
        </body>
    
</html>