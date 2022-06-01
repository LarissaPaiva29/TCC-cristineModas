<?php

$servidor = "localhost";
$db = 'sistema';
$us = 'root';
$senha ='';


try{
        $banco = new PDO("mysql:host=".$servidor.";dbname=".$db, $us, $senha);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    

?>