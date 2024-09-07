<?php
    try{
        $conexao = new PDO('mysql:host = localhost;dbBanco=sgc',"root","tiarute");
        $conexao -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Conectado com sucesso";
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>