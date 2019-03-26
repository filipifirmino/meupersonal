<?php
    
    $dsn = "mysql:dbname=estudo; host=localhost";
    $dbuser = "root";
    $dbpass = "dijital123";

        try{

            $pdo = new PDO($dsn, $dbuser, $dbpass);
            $sql = "SELECT *  FROM user";
            $sql = $pdo->query($sql);

            if($sql-> rowCount() > 0){
                
            }else{
                echo "Não há registros ha serem mostrados";
            }
            

        }catch(PDOException $e){
            echo "Erro: ". $e-> getMessage();
        }

       
?>