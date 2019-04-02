<?php
$dsn = "mysql:dbname=meupersonal;host=localhost";
$dbuser ="root";
$dbpass="dijital123";

    try{
        $pdo = new PDO($dsn, $dbuser, $dbpass);
        
        $email = $_POST['email-user'];
        $pass = md5($_POST['pass-user']);

        
            $sql = "UPDATE user SET pass=:pass WHERE email= :email";
            /* query para consulta no banco de dados */
            $sql = $pdo->prepare($sql);
            /*Preparando a query pelo PDO*/
            $sql->bindValue(':email', $email );/*Atribuição da busca e substituição*/
            $sql->bindValue(':pass', $pass); /* === */
            $sql->execute(); /* Mesma coisa que query*/
        if(rowcount($sql) > 0){
            echo "senha alterada com sucesso";
        }else{
            echo "Dados não foram alterados";
        }
            
    

    } catch(PDOException $e){
        echo "Error: ". $e->getMessage();
    }




?>

