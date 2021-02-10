<?php
    
    $dsn = "mysql:dbname=meupersonal; host=localhost";
    $dbuser = "root";
    $dbpass = "";

        try{

            $pdo = new PDO($dsn, $dbuser, $dbpass);
                /*Conectando ao banco de dados*/
            $sql = $pdo ->query("SELECT *  FROM user WHERE email = '$login' AND senha= '$senha'");
                /*Preparando a query de consulta*/ 
                
            if($sql-> rowCount() > 0){
                   $dado = $sql->fetch();

                $_SESSION['id'] = $dado['id'];
                header ("Location:../user/admin-painel.php");
            }

        } catch(PDOException $e){
            echo "Erro: ". $e-> getMessage();
        }
?>
