<?php
    $dsn = "mysql:dbname=meupersonal; host=localhost";
    $dbuser = "root";
    $dbpass = "";


    try{

        $pdo = new PDO($dsn, $dbuser, $dbpass);
            /*Conectando ao banco de dados*/

    } catch(PDOException $e){
        echo "Erro: ". $e-> getMessage();
    }


?>
